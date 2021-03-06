<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: access_path.proto

namespace Types;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>types.AccessPath</code>
 */
class AccessPath extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes address = 1;</code>
     */
    private $address = '';
    /**
     * Generated from protobuf field <code>bytes path = 2;</code>
     */
    private $path = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $address
     *     @type string $path
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\AccessPath::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes address = 1;</code>
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Generated from protobuf field <code>bytes address = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setAddress($var)
    {
        GPBUtil::checkString($var, False);
        $this->address = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes path = 2;</code>
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Generated from protobuf field <code>bytes path = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPath($var)
    {
        GPBUtil::checkString($var, False);
        $this->path = $var;

        return $this;
    }

}

