<?php

namespace PhpLibra\Wrapper;

use InvalidArgumentException;

/**
 * Class AccountAddress
 * Represents a validated account address.
 * @package PhpLibra
 */
class AccountAddress
{
    const ADDRESS_LENGTH = 32;

    const MINTER_ADDRESS = '0000000000000000000000000000000000000000000000000000000000000000';

    /**
     * @var string binary representative of the address
     */
    protected $addressByte;

    /**
     * AccountAddress constructor.
     * @param string|AccountAddress $addressOrHash
     */
    public function __construct($addressOrHash)
    {
        if ($addressOrHash instanceof AccountAddress) {
            $this->addressByte = $addressOrHash->addressByte;
        } elseif (is_binary($addressOrHash)) {
            if (!AccountAddress::isValidBytes($addressOrHash)) {
                throw new InvalidArgumentException(sprintf('%s is an invalid address.', $addressOrHash));
            }
            $this->addressByte = $addressOrHash;
        } else {
            if (!AccountAddress::isValidString($addressOrHash)) {
                throw new InvalidArgumentException(sprintf('%s is an invalid address.', $addressOrHash));
            }
            $this->addressByte = hex2bin($addressOrHash);
        }
    }

    /**
     * @param $address
     * @return bool
     */
    public static function isValidString($address)
    {
        return strlen($address) === AccountAddress::ADDRESS_LENGTH * 2;
    }

    /**
     * @param $addressBytes
     * @return bool
     */
    public static function isValidBytes($addressBytes)
    {
        return strlen($addressBytes) === AccountAddress::ADDRESS_LENGTH;
    }

    /**
     * @return string|null
     */
    public function toBytes()
    {
        return $this->addressByte;
    }

    /**
     * @return string
     */
    public function toHex()
    {
        return bin2hex($this->addressByte);
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->toHex();
    }
}
