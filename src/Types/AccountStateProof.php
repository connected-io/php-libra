<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proof.proto

namespace Types;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The complete proof used to authenticate an account state.
 *
 * Generated from protobuf message <code>types.AccountStateProof</code>
 */
class AccountStateProof extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.types.AccumulatorProof ledger_info_to_transaction_info_proof = 1;</code>
     */
    private $ledger_info_to_transaction_info_proof = null;
    /**
     * Generated from protobuf field <code>.types.TransactionInfo transaction_info = 2;</code>
     */
    private $transaction_info = null;
    /**
     * Generated from protobuf field <code>.types.SparseMerkleProof transaction_info_to_account_proof = 3;</code>
     */
    private $transaction_info_to_account_proof = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Types\AccumulatorProof $ledger_info_to_transaction_info_proof
     *     @type \Types\TransactionInfo $transaction_info
     *     @type \Types\SparseMerkleProof $transaction_info_to_account_proof
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proof::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.types.AccumulatorProof ledger_info_to_transaction_info_proof = 1;</code>
     * @return \Types\AccumulatorProof
     */
    public function getLedgerInfoToTransactionInfoProof()
    {
        return $this->ledger_info_to_transaction_info_proof;
    }

    /**
     * Generated from protobuf field <code>.types.AccumulatorProof ledger_info_to_transaction_info_proof = 1;</code>
     * @param \Types\AccumulatorProof $var
     * @return $this
     */
    public function setLedgerInfoToTransactionInfoProof($var)
    {
        GPBUtil::checkMessage($var, \Types\AccumulatorProof::class);
        $this->ledger_info_to_transaction_info_proof = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.types.TransactionInfo transaction_info = 2;</code>
     * @return \Types\TransactionInfo
     */
    public function getTransactionInfo()
    {
        return $this->transaction_info;
    }

    /**
     * Generated from protobuf field <code>.types.TransactionInfo transaction_info = 2;</code>
     * @param \Types\TransactionInfo $var
     * @return $this
     */
    public function setTransactionInfo($var)
    {
        GPBUtil::checkMessage($var, \Types\TransactionInfo::class);
        $this->transaction_info = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.types.SparseMerkleProof transaction_info_to_account_proof = 3;</code>
     * @return \Types\SparseMerkleProof
     */
    public function getTransactionInfoToAccountProof()
    {
        return $this->transaction_info_to_account_proof;
    }

    /**
     * Generated from protobuf field <code>.types.SparseMerkleProof transaction_info_to_account_proof = 3;</code>
     * @param \Types\SparseMerkleProof $var
     * @return $this
     */
    public function setTransactionInfoToAccountProof($var)
    {
        GPBUtil::checkMessage($var, \Types\SparseMerkleProof::class);
        $this->transaction_info_to_account_proof = $var;

        return $this;
    }

}

