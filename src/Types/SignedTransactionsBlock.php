<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: transaction.proto

namespace Types;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A generic structure that represents a block of transactions originated from a
 * particular validator instance.
 *
 * Generated from protobuf message <code>types.SignedTransactionsBlock</code>
 */
class SignedTransactionsBlock extends \Google\Protobuf\Internal\Message
{
    /**
     * Set of Signed Transactions
     *
     * Generated from protobuf field <code>repeated .types.SignedTransaction transactions = 1;</code>
     */
    private $transactions;
    /**
     * Public key of the validator that created this block
     *
     * Generated from protobuf field <code>bytes validator_public_key = 2;</code>
     */
    private $validator_public_key = '';
    /**
     * Signature of the validator that created this block
     *
     * Generated from protobuf field <code>bytes validator_signature = 3;</code>
     */
    private $validator_signature = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Types\SignedTransaction[]|\Google\Protobuf\Internal\RepeatedField $transactions
     *           Set of Signed Transactions
     *     @type string $validator_public_key
     *           Public key of the validator that created this block
     *     @type string $validator_signature
     *           Signature of the validator that created this block
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Transaction::initOnce();
        parent::__construct($data);
    }

    /**
     * Set of Signed Transactions
     *
     * Generated from protobuf field <code>repeated .types.SignedTransaction transactions = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTransactions()
    {
        return $this->transactions;
    }

    /**
     * Set of Signed Transactions
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
     * Public key of the validator that created this block
     *
     * Generated from protobuf field <code>bytes validator_public_key = 2;</code>
     * @return string
     */
    public function getValidatorPublicKey()
    {
        return $this->validator_public_key;
    }

    /**
     * Public key of the validator that created this block
     *
     * Generated from protobuf field <code>bytes validator_public_key = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setValidatorPublicKey($var)
    {
        GPBUtil::checkString($var, False);
        $this->validator_public_key = $var;

        return $this;
    }

    /**
     * Signature of the validator that created this block
     *
     * Generated from protobuf field <code>bytes validator_signature = 3;</code>
     * @return string
     */
    public function getValidatorSignature()
    {
        return $this->validator_signature;
    }

    /**
     * Signature of the validator that created this block
     *
     * Generated from protobuf field <code>bytes validator_signature = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setValidatorSignature($var)
    {
        GPBUtil::checkString($var, False);
        $this->validator_signature = $var;

        return $this;
    }

}

