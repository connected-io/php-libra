<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ledger_info.proto

namespace Types;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *&#47; Even though we don't always need all hashes, we pass them in and return them
 * / always so that we keep them in sync on the client and don't make the client
 * / worry about which one(s) to pass in which cases
 * /
 * / This structure serves a dual purpose.
 * /
 * / First, if this structure is signed by 2f+1 validators it signifies the state
 * / of the ledger at version `version` -- it contains the transaction
 * / accumulator at that version which commits to all historical transactions.
 * / This structure may be expanded to include other information that is derived
 * / from that accumulator (e.g. the current time according to the time contract)
 * / to reduce the number of proofs a client must get.
 * /
 * / Second, the structure contains a `consensus_data_hash` value. This is the
 * / hash of an internal data structure that represents a block that is voted on
 * / by consensus.
 * /
 * / Combining these two concepts when the consensus algorithm votes on a block B
 * / it votes for a LedgerInfo with the `version` being the latest version that
 * / will be committed if B gets 2f+1 votes. It sets `consensus_data_hash` to
 * / represent B so that if those 2f+1 votes are gathered, the block is valid to
 * / commit
 *
 * Generated from protobuf message <code>types.LedgerInfo</code>
 */
class LedgerInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Current latest version of the system
     *
     * Generated from protobuf field <code>uint64 version = 1;</code>
     */
    private $version = 0;
    /**
     * Root hash of transaction accumulator at this version
     *
     * Generated from protobuf field <code>bytes transaction_accumulator_hash = 2;</code>
     */
    private $transaction_accumulator_hash = '';
    /**
     * Hash of consensus-specific data that is opaque to all parts of the system
     * other than consensus.  This is needed to verify signatures because
     * consensus signing includes this hash
     *
     * Generated from protobuf field <code>bytes consensus_data_hash = 3;</code>
     */
    private $consensus_data_hash = '';
    /**
     * The block id of the last committed block corresponding to this ledger info.
     * This field is not particularly interesting to the clients, but can be used
     * by the validators for synchronization.
     *
     * Generated from protobuf field <code>bytes consensus_block_id = 4;</code>
     */
    private $consensus_block_id = '';
    /**
     * Epoch number corresponds to the set of validators that are active for this
     * ledger info. The main motivation for keeping the epoch number in the
     * LedgerInfo is to ensure that the client has enough information to verify
     * that the signatures for this info are coming from the validators that
     * indeed form a quorum. Without epoch number a potential attack could reuse
     * the signatures from the validators in one epoch in order to sign the wrong
     * info belonging to another epoch, in which these validators do not form a
     * quorum. The very first epoch number is 0.
     *
     * Generated from protobuf field <code>uint64 epoch_num = 5;</code>
     */
    private $epoch_num = 0;
    /**
     * Timestamp that represents the microseconds since the epoch (unix time) that is
     * generated by the proposer of the block.  This is strictly increasing with every block.
     * If a client reads a timestamp > the one they specified for transaction expiration time,
     * they can be certain that their transaction will never be included in a block in the future
     * (assuming that their transaction has not yet been included)
     *
     * Generated from protobuf field <code>uint64 timestamp_usecs = 6;</code>
     */
    private $timestamp_usecs = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $version
     *           Current latest version of the system
     *     @type string $transaction_accumulator_hash
     *           Root hash of transaction accumulator at this version
     *     @type string $consensus_data_hash
     *           Hash of consensus-specific data that is opaque to all parts of the system
     *           other than consensus.  This is needed to verify signatures because
     *           consensus signing includes this hash
     *     @type string $consensus_block_id
     *           The block id of the last committed block corresponding to this ledger info.
     *           This field is not particularly interesting to the clients, but can be used
     *           by the validators for synchronization.
     *     @type int|string $epoch_num
     *           Epoch number corresponds to the set of validators that are active for this
     *           ledger info. The main motivation for keeping the epoch number in the
     *           LedgerInfo is to ensure that the client has enough information to verify
     *           that the signatures for this info are coming from the validators that
     *           indeed form a quorum. Without epoch number a potential attack could reuse
     *           the signatures from the validators in one epoch in order to sign the wrong
     *           info belonging to another epoch, in which these validators do not form a
     *           quorum. The very first epoch number is 0.
     *     @type int|string $timestamp_usecs
     *           Timestamp that represents the microseconds since the epoch (unix time) that is
     *           generated by the proposer of the block.  This is strictly increasing with every block.
     *           If a client reads a timestamp > the one they specified for transaction expiration time,
     *           they can be certain that their transaction will never be included in a block in the future
     *           (assuming that their transaction has not yet been included)
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\LedgerInfo::initOnce();
        parent::__construct($data);
    }

    /**
     * Current latest version of the system
     *
     * Generated from protobuf field <code>uint64 version = 1;</code>
     * @return int|string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Current latest version of the system
     *
     * Generated from protobuf field <code>uint64 version = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkUint64($var);
        $this->version = $var;

        return $this;
    }

    /**
     * Root hash of transaction accumulator at this version
     *
     * Generated from protobuf field <code>bytes transaction_accumulator_hash = 2;</code>
     * @return string
     */
    public function getTransactionAccumulatorHash()
    {
        return $this->transaction_accumulator_hash;
    }

    /**
     * Root hash of transaction accumulator at this version
     *
     * Generated from protobuf field <code>bytes transaction_accumulator_hash = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTransactionAccumulatorHash($var)
    {
        GPBUtil::checkString($var, False);
        $this->transaction_accumulator_hash = $var;

        return $this;
    }

    /**
     * Hash of consensus-specific data that is opaque to all parts of the system
     * other than consensus.  This is needed to verify signatures because
     * consensus signing includes this hash
     *
     * Generated from protobuf field <code>bytes consensus_data_hash = 3;</code>
     * @return string
     */
    public function getConsensusDataHash()
    {
        return $this->consensus_data_hash;
    }

    /**
     * Hash of consensus-specific data that is opaque to all parts of the system
     * other than consensus.  This is needed to verify signatures because
     * consensus signing includes this hash
     *
     * Generated from protobuf field <code>bytes consensus_data_hash = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setConsensusDataHash($var)
    {
        GPBUtil::checkString($var, False);
        $this->consensus_data_hash = $var;

        return $this;
    }

    /**
     * The block id of the last committed block corresponding to this ledger info.
     * This field is not particularly interesting to the clients, but can be used
     * by the validators for synchronization.
     *
     * Generated from protobuf field <code>bytes consensus_block_id = 4;</code>
     * @return string
     */
    public function getConsensusBlockId()
    {
        return $this->consensus_block_id;
    }

    /**
     * The block id of the last committed block corresponding to this ledger info.
     * This field is not particularly interesting to the clients, but can be used
     * by the validators for synchronization.
     *
     * Generated from protobuf field <code>bytes consensus_block_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setConsensusBlockId($var)
    {
        GPBUtil::checkString($var, False);
        $this->consensus_block_id = $var;

        return $this;
    }

    /**
     * Epoch number corresponds to the set of validators that are active for this
     * ledger info. The main motivation for keeping the epoch number in the
     * LedgerInfo is to ensure that the client has enough information to verify
     * that the signatures for this info are coming from the validators that
     * indeed form a quorum. Without epoch number a potential attack could reuse
     * the signatures from the validators in one epoch in order to sign the wrong
     * info belonging to another epoch, in which these validators do not form a
     * quorum. The very first epoch number is 0.
     *
     * Generated from protobuf field <code>uint64 epoch_num = 5;</code>
     * @return int|string
     */
    public function getEpochNum()
    {
        return $this->epoch_num;
    }

    /**
     * Epoch number corresponds to the set of validators that are active for this
     * ledger info. The main motivation for keeping the epoch number in the
     * LedgerInfo is to ensure that the client has enough information to verify
     * that the signatures for this info are coming from the validators that
     * indeed form a quorum. Without epoch number a potential attack could reuse
     * the signatures from the validators in one epoch in order to sign the wrong
     * info belonging to another epoch, in which these validators do not form a
     * quorum. The very first epoch number is 0.
     *
     * Generated from protobuf field <code>uint64 epoch_num = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setEpochNum($var)
    {
        GPBUtil::checkUint64($var);
        $this->epoch_num = $var;

        return $this;
    }

    /**
     * Timestamp that represents the microseconds since the epoch (unix time) that is
     * generated by the proposer of the block.  This is strictly increasing with every block.
     * If a client reads a timestamp > the one they specified for transaction expiration time,
     * they can be certain that their transaction will never be included in a block in the future
     * (assuming that their transaction has not yet been included)
     *
     * Generated from protobuf field <code>uint64 timestamp_usecs = 6;</code>
     * @return int|string
     */
    public function getTimestampUsecs()
    {
        return $this->timestamp_usecs;
    }

    /**
     * Timestamp that represents the microseconds since the epoch (unix time) that is
     * generated by the proposer of the block.  This is strictly increasing with every block.
     * If a client reads a timestamp > the one they specified for transaction expiration time,
     * they can be certain that their transaction will never be included in a block in the future
     * (assuming that their transaction has not yet been included)
     *
     * Generated from protobuf field <code>uint64 timestamp_usecs = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTimestampUsecs($var)
    {
        GPBUtil::checkUint64($var);
        $this->timestamp_usecs = $var;

        return $this;
    }

}
