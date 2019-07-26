<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: validator_public_keys.proto

namespace Types;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf definition for the Rust struct ValidatorPublicKeys
 *
 * Generated from protobuf message <code>types.ValidatorPublicKeys</code>
 */
class ValidatorPublicKeys extends \Google\Protobuf\Internal\Message
{
    /**
     * Validator account address
     *
     * Generated from protobuf field <code>bytes account_address = 1;</code>
     */
    private $account_address = '';
    /**
     * Consensus public key
     *
     * Generated from protobuf field <code>bytes consensus_public_key = 2;</code>
     */
    private $consensus_public_key = '';
    /**
     * Network signing publick key
     *
     * Generated from protobuf field <code>bytes network_signing_public_key = 3;</code>
     */
    private $network_signing_public_key = '';
    /**
     *&#47; Network identity publick key
     *
     * Generated from protobuf field <code>bytes network_identity_public_key = 4;</code>
     */
    private $network_identity_public_key = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $account_address
     *           Validator account address
     *     @type string $consensus_public_key
     *           Consensus public key
     *     @type string $network_signing_public_key
     *           Network signing publick key
     *     @type string $network_identity_public_key
     *          &#47; Network identity publick key
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\ValidatorPublicKeys::initOnce();
        parent::__construct($data);
    }

    /**
     * Validator account address
     *
     * Generated from protobuf field <code>bytes account_address = 1;</code>
     * @return string
     */
    public function getAccountAddress()
    {
        return $this->account_address;
    }

    /**
     * Validator account address
     *
     * Generated from protobuf field <code>bytes account_address = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setAccountAddress($var)
    {
        GPBUtil::checkString($var, False);
        $this->account_address = $var;

        return $this;
    }

    /**
     * Consensus public key
     *
     * Generated from protobuf field <code>bytes consensus_public_key = 2;</code>
     * @return string
     */
    public function getConsensusPublicKey()
    {
        return $this->consensus_public_key;
    }

    /**
     * Consensus public key
     *
     * Generated from protobuf field <code>bytes consensus_public_key = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setConsensusPublicKey($var)
    {
        GPBUtil::checkString($var, False);
        $this->consensus_public_key = $var;

        return $this;
    }

    /**
     * Network signing publick key
     *
     * Generated from protobuf field <code>bytes network_signing_public_key = 3;</code>
     * @return string
     */
    public function getNetworkSigningPublicKey()
    {
        return $this->network_signing_public_key;
    }

    /**
     * Network signing publick key
     *
     * Generated from protobuf field <code>bytes network_signing_public_key = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setNetworkSigningPublicKey($var)
    {
        GPBUtil::checkString($var, False);
        $this->network_signing_public_key = $var;

        return $this;
    }

    /**
     *&#47; Network identity publick key
     *
     * Generated from protobuf field <code>bytes network_identity_public_key = 4;</code>
     * @return string
     */
    public function getNetworkIdentityPublicKey()
    {
        return $this->network_identity_public_key;
    }

    /**
     *&#47; Network identity publick key
     *
     * Generated from protobuf field <code>bytes network_identity_public_key = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setNetworkIdentityPublicKey($var)
    {
        GPBUtil::checkString($var, False);
        $this->network_identity_public_key = $var;

        return $this;
    }

}

