<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: transaction.proto

namespace Types;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An argument to the transaction if the transaction takes arguments
 *
 * Generated from protobuf message <code>types.TransactionArgument</code>
 */
class TransactionArgument extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.types.TransactionArgument.ArgType type = 1;</code>
     */
    private $type = 0;
    /**
     * Generated from protobuf field <code>bytes data = 2;</code>
     */
    private $data = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $type
     *     @type string $data
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Transaction::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.types.TransactionArgument.ArgType type = 1;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>.types.TransactionArgument.ArgType type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Types\TransactionArgument_ArgType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes data = 2;</code>
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Generated from protobuf field <code>bytes data = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkString($var, False);
        $this->data = $var;

        return $this;
    }

}

