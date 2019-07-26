<?php

namespace PhpLibra\Wrapper;

use Types\Event as TypesEvent;
use Types\LedgerInfoWithSignatures;
use Types\SignedTransaction;
use Types\TransactionListWithProof;

/**
 * Class TransactionDetails
 * A wrapper class to work with transaction details.
 * @package PhpLibra\Wrapper
 */
class TransactionDetails
{
    public $version = '';
    public $latestVersion = '';

    public $timestampUsecs = 0;

    public $timestamp = 0;

    // from raw transaction
    public $fromAddress = '';
    public $toAddress = '';
    public $amount = 0;
    public $type = '';
    public $sequenceNumber = null;
    public $maxGasAmount = '';
    public $gasUnitPrice = 0;
    public $gasUsed = 0;
    public $expirationTime = null;
    public $payload = null;
    public $senderPublicKey = '';
    public $signedTransactionHash = '';
    public $stateRootHash = '';
    public $eventRootHash = '';

    /**
     * @var Event[] $events
     */
    public $events = [];

    /**
     * TransactionDetails constructor.
     * @param $version
     * @param TransactionListWithProof $transactionListWithProof
     * @throws \Exception
     */
    public function __construct(TransactionListWithProof $transactionListWithProof, LedgerInfoWithSignatures $ledgerInfoWithSignatures)
    {
        $this->latestVersion = $ledgerInfoWithSignatures->getLedgerInfo()->getVersion();
        $this->timestampUsecs = $ledgerInfoWithSignatures->getLedgerInfo()->getTimestampUsecs();
        $this->timestamp = date('Y-m-d H:i:s', $ledgerInfoWithSignatures->getLedgerInfo()->getTimestampUsecs() / 1000000);

        /**
         * @var SignedTransaction $signedTransaction
         */
        $signedTransaction = $transactionListWithProof->getTransactions()->offsetGet(0);
        $raw = $signedTransaction->getRawTxnBytes();
        $txn = new Transaction($raw);

        $this->fromAddress = $txn->fromAddress;
        $this->toAddress = $txn->toAddress;
        $this->amount = $txn->amount;
        $this->type = ($this->fromAddress === AccountAddress::MINTER_ADDRESS) ? 'mint' : 'peer_to_peer';
        $this->sequenceNumber = $txn->sequenceNumber;
        $this->maxGasAmount = $txn->maxGasAmount;
        $this->gasUnitPrice = $txn->gasUnitPrice;
        $this->expirationTime = $txn->expirationTime;
        $this->payload = $txn->payload;

        $st = $transactionListWithProof->getTransactions()->offsetGet(0);
        $this->senderPublicKey = bin2hex($st->getSenderPublicKey());

        $ti = $transactionListWithProof->getInfos()->offsetGet(0);
        $this->signedTransactionHash = bin2hex($ti->getSignedTransactionHash());
        $this->eventRootHash = bin2hex($ti->getEventRootHash());
        $this->stateRootHash = bin2hex($ti->getStateRootHash());
        $this->gasUsed = $ti->getGasUsed();

        $this->version = $transactionListWithProof->getFirstTransactionVersionValue();

        $versionEvents = $transactionListWithProof->getEventsForVersions()->getEventsForVersion()->offsetGet(0)->getEvents();
        $events = [];
        /**
         * @var TypesEvent $typesEvent
         */
        foreach ($versionEvents as $typesEvent) {
            $event = new Event($typesEvent);
            $events[] = $event;
        }

        $this->events = $events;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        $events = [];
        foreach ($this->events as $event) {
            $events[] = $event->toArray();
        }

        return [
            'version' => $this->version,
            'latestVersion' => $this->latestVersion,
            'timestampUsecs' => $this->timestampUsecs,
            'timestamp' => $this->timestamp,

            'fromAddress' => $this->fromAddress,
            'toAddress' => $this->toAddress,
            'amount' => $this->amount,
            'type' => $this->type,
            'sequenceNumber' => $this->sequenceNumber,
            'maxGasAmount' => $this->maxGasAmount,
            'gasUnitPrice' => $this->gasUnitPrice,
            'gasUsed' => $this->gasUsed,
            'expirationTime' => $this->expirationTime,
            'payload' => $this->payload,

            'senderPublicKey' => $this->senderPublicKey,
            'signedTransactionHash' => $this->signedTransactionHash,
            'stateRootHash' => $this->stateRootHash,
            'eventRootHash' => $this->eventRootHash,

            'events' => $events,
        ];
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return json_encode($this->toArray(), true);
    }
}
