<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: mempool_status.proto

namespace Mempool;

use UnexpectedValueException;

/**
 * Protobuf type <code>mempool.MempoolAddTransactionStatus</code>
 */
class MempoolAddTransactionStatus
{
    /**
     * Transaction was sent to Mempool
     *
     * Generated from protobuf enum <code>Valid = 0;</code>
     */
    const Valid = 0;
    /**
     * The sender does not have enough balance for the transaction.
     *
     * Generated from protobuf enum <code>InsufficientBalance = 1;</code>
     */
    const InsufficientBalance = 1;
    /**
     * Sequence number is old, etc.
     *
     * Generated from protobuf enum <code>InvalidSeqNumber = 2;</code>
     */
    const InvalidSeqNumber = 2;
    /**
     * Mempool is full (reached max global capacity)
     *
     * Generated from protobuf enum <code>MempoolIsFull = 3;</code>
     */
    const MempoolIsFull = 3;
    /**
     * Account reached max capacity per account
     *
     * Generated from protobuf enum <code>TooManyTransactions = 4;</code>
     */
    const TooManyTransactions = 4;
    /**
     * Invalid update. Only gas price increase is allowed
     *
     * Generated from protobuf enum <code>InvalidUpdate = 5;</code>
     */
    const InvalidUpdate = 5;

    private static $valueToName = [
        self::Valid => 'Valid',
        self::InsufficientBalance => 'InsufficientBalance',
        self::InvalidSeqNumber => 'InvalidSeqNumber',
        self::MempoolIsFull => 'MempoolIsFull',
        self::TooManyTransactions => 'TooManyTransactions',
        self::InvalidUpdate => 'InvalidUpdate',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

