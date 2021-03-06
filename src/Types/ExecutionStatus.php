<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: vm_errors.proto

namespace Types;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>types.ExecutionStatus</code>
 */
class ExecutionStatus extends \Google\Protobuf\Internal\Message
{
    protected $execution_status;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $runtime_status
     *     @type \Types\Aborted $aborted
     *     @type \Types\ArithmeticError $arithmetic_error
     *     @type \Types\DynamicReferenceError $reference_error
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\VmErrors::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.types.RuntimeStatus runtime_status = 1;</code>
     * @return int
     */
    public function getRuntimeStatus()
    {
        return $this->readOneof(1);
    }

    /**
     * Generated from protobuf field <code>.types.RuntimeStatus runtime_status = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setRuntimeStatus($var)
    {
        GPBUtil::checkEnum($var, \Types\RuntimeStatus::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.types.Aborted aborted = 2;</code>
     * @return \Types\Aborted
     */
    public function getAborted()
    {
        return $this->readOneof(2);
    }

    /**
     * Generated from protobuf field <code>.types.Aborted aborted = 2;</code>
     * @param \Types\Aborted $var
     * @return $this
     */
    public function setAborted($var)
    {
        GPBUtil::checkMessage($var, \Types\Aborted::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.types.ArithmeticError arithmetic_error = 3;</code>
     * @return \Types\ArithmeticError
     */
    public function getArithmeticError()
    {
        return $this->readOneof(3);
    }

    /**
     * Generated from protobuf field <code>.types.ArithmeticError arithmetic_error = 3;</code>
     * @param \Types\ArithmeticError $var
     * @return $this
     */
    public function setArithmeticError($var)
    {
        GPBUtil::checkMessage($var, \Types\ArithmeticError::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.types.DynamicReferenceError reference_error = 4;</code>
     * @return \Types\DynamicReferenceError
     */
    public function getReferenceError()
    {
        return $this->readOneof(4);
    }

    /**
     * Generated from protobuf field <code>.types.DynamicReferenceError reference_error = 4;</code>
     * @param \Types\DynamicReferenceError $var
     * @return $this
     */
    public function setReferenceError($var)
    {
        GPBUtil::checkMessage($var, \Types\DynamicReferenceError::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getExecutionStatus()
    {
        return $this->whichOneof("execution_status");
    }

}

