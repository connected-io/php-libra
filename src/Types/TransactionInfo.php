<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: transaction_info.proto

namespace Types;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * `TransactionInfo` is the object we store in the transaction accumulator. It
 * consists of the transaction as well as the execution result of this
 * transaction. This are later returned to the client so that a client can
 * validate the tree
 *
 * Generated from protobuf message <code>types.TransactionInfo</code>
 */
class TransactionInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Hash of the signed transaction that is stored
     *
     * Generated from protobuf field <code>bytes signed_transaction_hash = 1;</code>
     */
    private $signed_transaction_hash = '';
    /**
     * The root hash of Sparse Merkle Tree describing the world state at the end
     * of this transaction
     *
     * Generated from protobuf field <code>bytes state_root_hash = 2;</code>
     */
    private $state_root_hash = '';
    /**
     * The root hash of Merkle Accumulator storing all events emitted during this
     * transaction.
     *
     * Generated from protobuf field <code>bytes event_root_hash = 3;</code>
     */
    private $event_root_hash = '';
    /**
     * The amount of gas used by this transaction.
     *
     * Generated from protobuf field <code>uint64 gas_used = 4;</code>
     */
    private $gas_used = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $signed_transaction_hash
     *           Hash of the signed transaction that is stored
     *     @type string $state_root_hash
     *           The root hash of Sparse Merkle Tree describing the world state at the end
     *           of this transaction
     *     @type string $event_root_hash
     *           The root hash of Merkle Accumulator storing all events emitted during this
     *           transaction.
     *     @type int|string $gas_used
     *           The amount of gas used by this transaction.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\TransactionInfo::initOnce();
        parent::__construct($data);
    }

    /**
     * Hash of the signed transaction that is stored
     *
     * Generated from protobuf field <code>bytes signed_transaction_hash = 1;</code>
     * @return string
     */
    public function getSignedTransactionHash()
    {
        return $this->signed_transaction_hash;
    }

    /**
     * Hash of the signed transaction that is stored
     *
     * Generated from protobuf field <code>bytes signed_transaction_hash = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSignedTransactionHash($var)
    {
        GPBUtil::checkString($var, False);
        $this->signed_transaction_hash = $var;

        return $this;
    }

    /**
     * The root hash of Sparse Merkle Tree describing the world state at the end
     * of this transaction
     *
     * Generated from protobuf field <code>bytes state_root_hash = 2;</code>
     * @return string
     */
    public function getStateRootHash()
    {
        return $this->state_root_hash;
    }

    /**
     * The root hash of Sparse Merkle Tree describing the world state at the end
     * of this transaction
     *
     * Generated from protobuf field <code>bytes state_root_hash = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setStateRootHash($var)
    {
        GPBUtil::checkString($var, False);
        $this->state_root_hash = $var;

        return $this;
    }

    /**
     * The root hash of Merkle Accumulator storing all events emitted during this
     * transaction.
     *
     * Generated from protobuf field <code>bytes event_root_hash = 3;</code>
     * @return string
     */
    public function getEventRootHash()
    {
        return $this->event_root_hash;
    }

    /**
     * The root hash of Merkle Accumulator storing all events emitted during this
     * transaction.
     *
     * Generated from protobuf field <code>bytes event_root_hash = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setEventRootHash($var)
    {
        GPBUtil::checkString($var, False);
        $this->event_root_hash = $var;

        return $this;
    }

    /**
     * The amount of gas used by this transaction.
     *
     * Generated from protobuf field <code>uint64 gas_used = 4;</code>
     * @return int|string
     */
    public function getGasUsed()
    {
        return $this->gas_used;
    }

    /**
     * The amount of gas used by this transaction.
     *
     * Generated from protobuf field <code>uint64 gas_used = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setGasUsed($var)
    {
        GPBUtil::checkUint64($var);
        $this->gas_used = $var;

        return $this;
    }

}

