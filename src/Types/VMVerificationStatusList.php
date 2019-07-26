<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: vm_errors.proto

namespace Types;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>types.VMVerificationStatusList</code>
 */
class VMVerificationStatusList extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .types.VMVerificationStatus status_list = 1;</code>
     */
    private $status_list;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Types\VMVerificationStatus[]|\Google\Protobuf\Internal\RepeatedField $status_list
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\VmErrors::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .types.VMVerificationStatus status_list = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getStatusList()
    {
        return $this->status_list;
    }

    /**
     * Generated from protobuf field <code>repeated .types.VMVerificationStatus status_list = 1;</code>
     * @param \Types\VMVerificationStatus[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setStatusList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Types\VMVerificationStatus::class);
        $this->status_list = $arr;

        return $this;
    }

}

