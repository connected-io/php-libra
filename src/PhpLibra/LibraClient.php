<?php

namespace PhpLibra;

use Admission_control\AdmissionControlClient;
use Exception;
use Google\Protobuf\Internal\RepeatedField;
use PhpLibra\Wrapper\AccountAddress;
use PhpLibra\Wrapper\TransactionDetails;
use Types\AccountStateWithProof;
use Types\GetAccountStateRequest;
use Types\GetAccountStateResponse;
use Types\GetAccountTransactionBySequenceNumberRequest;
use Types\GetAccountTransactionBySequenceNumberResponse;
use Types\GetTransactionsRequest;
use Types\LedgerInfoWithSignatures;
use Types\RequestItem;
use Types\ResponseItem;
use Types\SparseMerkleProof;
use Types\TransactionListWithProof;
use Types\UpdateToLatestLedgerRequest;
use Types\UpdateToLatestLedgerResponse;
use PhpLibra\Wrapper\AccountState;

class LibraClient
{
    /**
     * @var $client AdmissionControlClient
     */
    protected $client;

    /**
     * LibraClient constructor.
     * @param string $host
     * @param int $port
     */
    public function __construct(AdmissionControlClient $client = null)
    {
        // default
        if ($client === null) {
            $host = 'ac.testnet.libra.org';
            $port = 8000;
            $connectionString = "{$host}:{$port}";
            $client = new AdmissionControlClient($connectionString,
                ['credentials' => \Grpc\ChannelCredentials::createInsecure()]
            );
        }

        $this->client = $client;
    }

    /**
     * Fetch the current state of an account.
     * @param $address
     * @return AccountState
     * @throws Exception
     */
    public function getAccountState($address)
    {
        $responses = $this->getAccountStates([$address]);
        return $responses[0];
    }

    /**
     * Fetch the current state of multiple accounts.
     * @param array $addresses
     * @return AccountState[]
     * @throws \Exception
     */
    public function getAccountStates(array $addresses)
    {
        $requestItems = [];

        foreach ($addresses as $address) {
            $accountAddress = new AccountAddress($address);

            $request = new GetAccountStateRequest();
            $request->setAddress($accountAddress->toBytes());
            $requestItem = new RequestItem();
            $requestItem->setGetAccountStateRequest($request);
            $requestItems[] = $requestItem;
        }

        $request = new UpdateToLatestLedgerRequest();
        $request->setRequestedItems($requestItems);
        list($response, $status) = $this->client->UpdateToLatestLedger($request)->wait();
        if ($status->code > 0) {
            throw new Exception($status->details, $status->code);
        }

        /**
         * @var $items RepeatedField
         */
        $items = $response->getResponseItems();

        $responses = [];
        foreach($items->getIterator() as $item) {
            /** @var GetAccountStateResponse $response */
            $response = $item->getGetAccountStateResponse();

            /** @var AccountStateWithProof $stateBlob */
            $stateBlob = $response->getAccountStateWithProof();

            $blob = $stateBlob->getBlob();
            $accountState = null;

            if ($blob !== null) {
                $accountState = new AccountState($blob->getBlob());
            }

            $responses[] = $accountState;
        }

        return $responses;
    }

    /**
     * Get balance of an address.
     * @param $address
     * @return float
     * @throws Exception
     */
    public function getBalance($address)
    {
        $ac = $this->getAccountState($address);

        if ($ac === null) {
            return 0;
        }

        return convert_libra($ac->balance);
    }

    /**
     * Returns the Accounts transactions done with sequenceNumber.
     * @param $address
     * @param $sequenceNumber
     * @param bool $fetchEvents
     * @return null
     * @throws Exception
     */
    public function getAccountTransactions($address, $sequenceNumber, $fetchEvents = true)
    {
        $accountAddress = new AccountAddress($address);

        $requestItem = new RequestItem();
        $getTransactionRequest = new GetAccountTransactionBySequenceNumberRequest();
        $getTransactionRequest->setAccount($accountAddress->toBytes());
        $getTransactionRequest->setSequenceNumber($sequenceNumber);
        $getTransactionRequest->setFetchEvents($fetchEvents);
        $requestItem->setGetAccountTransactionBySequenceNumberRequest($getTransactionRequest);

        $request = new UpdateToLatestLedgerRequest();
        $request->setRequestedItems([$requestItem]);

        /**
         * @var UpdateToLatestLedgerRequest $response
         */
        list($response, $status) = $this->client->UpdateToLatestLedger($request)->wait();
        if ($status->code > 0) {
            throw new Exception($status->details, $status->code);
        }

        /**
         * @var RepeatedField $items
         */
        $items = $response->getResponseItems();

        if (count($items) === 0) {
            return null;
        }

        /**
         * @var ResponseItem $item
         */
        $item = isset($items[0]) ? $items[0] : null;
        /**
         * @var GetAccountTransactionBySequenceNumberResponse $r
         */
        $r = $item->getGetAccountTransactionBySequenceNumberResponse();
        /**
         * @var SparseMerkleProof
         */
        $proof = $r->getProofOfCurrentSequenceNumber()->getProof()->getTransactionInfoToAccountProof();
    }

    /**
     * Get the latest version.
     * @return int
     * @throws Exception
     */
    public function getLatestVersionNumber()
    {
        $request = new UpdateToLatestLedgerRequest();
        $request->setRequestedItems([]);
        /**
         * @var UpdateToLatestLedgerResponse $response
         */
        list($response, $status) = $this->client->UpdateToLatestLedger($request)->wait();
        if ($status->code > 0) {
            throw new Exception($status->details, $status->code);
        }

        return $response->getLedgerInfoWithSigs()->getLedgerInfo()->getVersion();
    }

    /**
     * @param $version
     * @param int $limit
     * @param bool $fetchEvents
     * @return TransactionDetails
     * @throws \Exception
     */
    public function getTransactionDetails($version, $limit = 1, $fetchEvents = true)
    {
        $txnRequest = new GetTransactionsRequest([
            'start_version' => $version,
            'limit' => $limit,
            'fetch_events' => $fetchEvents
        ]);

        $requestItem = new RequestItem();
        $requestItem->setGetTransactionsRequest($txnRequest);

        $request = new UpdateToLatestLedgerRequest();
        $request->setClientKnownVersion($version);
        $request->setRequestedItems([$requestItem]);

        /**
         * @var UpdateToLatestLedgerResponse $response
         */
        list($response, $status) = $this->client->UpdateToLatestLedger($request)->wait();
        if ($status->code > 0) {
            throw new Exception($status->details, $status->code);
        }

        /**
         * @var TransactionListWithProof $transactionListWithProof
         */
        $transactionListWithProof = $response->getResponseItems()->offsetGet(0)->getGetTransactionsResponse()->getTxnListWithProof();

        /**
         * @var LedgerInfoWithSignatures $ledgerInfoWithSigs
         */
        $ledgerInfoWithSigs = $response->getLedgerInfoWithSigs();

        $txnDetails = new TransactionDetails($transactionListWithProof, $ledgerInfoWithSigs);

        return $txnDetails;
    }
}
