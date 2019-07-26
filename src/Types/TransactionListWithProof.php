<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: transaction.proto

namespace Types;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A list of consecutive transactions with proof. This is mainly used for state
 * synchronization when a validator would request a list of transactions from a
 * peer, verify the proof, execute the transactions and persist them. Note that
 * the transactions are supposed to belong to the same epoch E, otherwise
 * verification will fail.
 *
 * Generated from protobuf message <code>types.TransactionListWithProof</code>
 */
class TransactionListWithProof extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of transactions.
     *
     * Generated from protobuf field <code>repeated .types.SignedTransaction transactions = 1;</code>
     */
    private $transactions;
    /**
     * The list of corresponding TransactionInfo objects.
     *
     * Generated from protobuf field <code>repeated .types.TransactionInfo infos = 2;</code>
     */
    private $infos;
    /**
     * The list of corresponding Event objects (only present if fetch_events was set to true in req)
     *
     * Generated from protobuf field <code>.types.EventsForVersions events_for_versions = 3;</code>
     */
    private $events_for_versions = null;
    /**
     * If the list is not empty, the version of the first transaction.
     *
     * Generated from protobuf field <code>.google.protobuf.UInt64Value first_transaction_version = 4;</code>
     */
    private $first_transaction_version = null;
    /**
     * The proofs of the first and last transaction in this chunk. When this is
     * used for state synchronization, the validator who requests the transactions
     * will provide a version in the request and the proofs will be relative to
     * the given version. When this is returned in GetTransactionsResponse, the
     * proofs will be relative to the ledger info returned in
     * UpdateToLatestLedgerResponse.
     *
     * Generated from protobuf field <code>.types.AccumulatorProof proof_of_first_transaction = 5;</code>
     */
    private $proof_of_first_transaction = null;
    /**
     * Generated from protobuf field <code>.types.AccumulatorProof proof_of_last_transaction = 6;</code>
     */
    private $proof_of_last_transaction = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Types\SignedTransaction[]|\Google\Protobuf\Internal\RepeatedField $transactions
     *           The list of transactions.
     *     @type \Types\TransactionInfo[]|\Google\Protobuf\Internal\RepeatedField $infos
     *           The list of corresponding TransactionInfo objects.
     *     @type \Types\EventsForVersions $events_for_versions
     *           The list of corresponding Event objects (only present if fetch_events was set to true in req)
     *     @type \Google\Protobuf\UInt64Value $first_transaction_version
     *           If the list is not empty, the version of the first transaction.
     *     @type \Types\AccumulatorProof $proof_of_first_transaction
     *           The proofs of the first and last transaction in this chunk. When this is
     *           used for state synchronization, the validator who requests the transactions
     *           will provide a version in the request and the proofs will be relative to
     *           the given version. When this is returned in GetTransactionsResponse, the
     *           proofs will be relative to the ledger info returned in
     *           UpdateToLatestLedgerResponse.
     *     @type \Types\AccumulatorProof $proof_of_last_transaction
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Transaction::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of transactions.
     *
     * Generated from protobuf field <code>repeated .types.SignedTransaction transactions = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTransactions()
    {
        return $this->transactions;
    }

    /**
     * The list of transactions.
     *
     * Generated from protobuf field <code>repeated .types.SignedTransaction transactions = 1;</code>
     * @param \Types\SignedTransaction[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTransactions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Types\SignedTransaction::class);
        $this->transactions = $arr;

        return $this;
    }

    /**
     * The list of corresponding TransactionInfo objects.
     *
     * Generated from protobuf field <code>repeated .types.TransactionInfo infos = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInfos()
    {
        return $this->infos;
    }

    /**
     * The list of corresponding TransactionInfo objects.
     *
     * Generated from protobuf field <code>repeated .types.TransactionInfo infos = 2;</code>
     * @param \Types\TransactionInfo[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInfos($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Types\TransactionInfo::class);
        $this->infos = $arr;

        return $this;
    }

    /**
     * The list of corresponding Event objects (only present if fetch_events was set to true in req)
     *
     * Generated from protobuf field <code>.types.EventsForVersions events_for_versions = 3;</code>
     * @return \Types\EventsForVersions
     */
    public function getEventsForVersions()
    {
        return $this->events_for_versions;
    }

    /**
     * The list of corresponding Event objects (only present if fetch_events was set to true in req)
     *
     * Generated from protobuf field <code>.types.EventsForVersions events_for_versions = 3;</code>
     * @param \Types\EventsForVersions $var
     * @return $this
     */
    public function setEventsForVersions($var)
    {
        GPBUtil::checkMessage($var, \Types\EventsForVersions::class);
        $this->events_for_versions = $var;

        return $this;
    }

    /**
     * If the list is not empty, the version of the first transaction.
     *
     * Generated from protobuf field <code>.google.protobuf.UInt64Value first_transaction_version = 4;</code>
     * @return \Google\Protobuf\UInt64Value
     */
    public function getFirstTransactionVersion()
    {
        return $this->first_transaction_version;
    }

    /**
     * Returns the unboxed value from <code>getFirstTransactionVersion()</code>

     * If the list is not empty, the version of the first transaction.
     *
     * Generated from protobuf field <code>.google.protobuf.UInt64Value first_transaction_version = 4;</code>
     * @return int|string|null
     */
    public function getFirstTransactionVersionValue()
    {
        $wrapper = $this->getFirstTransactionVersion();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * If the list is not empty, the version of the first transaction.
     *
     * Generated from protobuf field <code>.google.protobuf.UInt64Value first_transaction_version = 4;</code>
     * @param \Google\Protobuf\UInt64Value $var
     * @return $this
     */
    public function setFirstTransactionVersion($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\UInt64Value::class);
        $this->first_transaction_version = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\UInt64Value object.

     * If the list is not empty, the version of the first transaction.
     *
     * Generated from protobuf field <code>.google.protobuf.UInt64Value first_transaction_version = 4;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setFirstTransactionVersionValue($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\UInt64Value(['value' => $var]);
        return $this->setFirstTransactionVersion($wrappedVar);
    }

    /**
     * The proofs of the first and last transaction in this chunk. When this is
     * used for state synchronization, the validator who requests the transactions
     * will provide a version in the request and the proofs will be relative to
     * the given version. When this is returned in GetTransactionsResponse, the
     * proofs will be relative to the ledger info returned in
     * UpdateToLatestLedgerResponse.
     *
     * Generated from protobuf field <code>.types.AccumulatorProof proof_of_first_transaction = 5;</code>
     * @return \Types\AccumulatorProof
     */
    public function getProofOfFirstTransaction()
    {
        return $this->proof_of_first_transaction;
    }

    /**
     * The proofs of the first and last transaction in this chunk. When this is
     * used for state synchronization, the validator who requests the transactions
     * will provide a version in the request and the proofs will be relative to
     * the given version. When this is returned in GetTransactionsResponse, the
     * proofs will be relative to the ledger info returned in
     * UpdateToLatestLedgerResponse.
     *
     * Generated from protobuf field <code>.types.AccumulatorProof proof_of_first_transaction = 5;</code>
     * @param \Types\AccumulatorProof $var
     * @return $this
     */
    public function setProofOfFirstTransaction($var)
    {
        GPBUtil::checkMessage($var, \Types\AccumulatorProof::class);
        $this->proof_of_first_transaction = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.types.AccumulatorProof proof_of_last_transaction = 6;</code>
     * @return \Types\AccumulatorProof
     */
    public function getProofOfLastTransaction()
    {
        return $this->proof_of_last_transaction;
    }

    /**
     * Generated from protobuf field <code>.types.AccumulatorProof proof_of_last_transaction = 6;</code>
     * @param \Types\AccumulatorProof $var
     * @return $this
     */
    public function setProofOfLastTransaction($var)
    {
        GPBUtil::checkMessage($var, \Types\AccumulatorProof::class);
        $this->proof_of_last_transaction = $var;

        return $this;
    }

}

