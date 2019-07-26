<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: vm_errors.proto

namespace Types;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * user-defined abort error code number
 *
 * Generated from protobuf message <code>types.Aborted</code>
 */
class Aborted extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 aborted_error_code = 1;</code>
     */
    private $aborted_error_code = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $aborted_error_code
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\VmErrors::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint64 aborted_error_code = 1;</code>
     * @return int|string
     */
    public function getAbortedErrorCode()
    {
        return $this->aborted_error_code;
    }

    /**
     * Generated from protobuf field <code>uint64 aborted_error_code = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setAbortedErrorCode($var)
    {
        GPBUtil::checkUint64($var);
        $this->aborted_error_code = $var;

        return $this;
    }

}

