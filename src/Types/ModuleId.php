<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: language_storage.proto

namespace Types;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *&#47; The unique identifier for a module on the chain.
 *
 * Generated from protobuf message <code>types.ModuleId</code>
 */
class ModuleId extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes address = 1;</code>
     */
    private $address = '';
    /**
     * Generated from protobuf field <code>string name = 2;</code>
     */
    private $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $address
     *     @type string $name
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\LanguageStorage::initOnce();
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
     * Generated from protobuf field <code>string name = 2;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}
