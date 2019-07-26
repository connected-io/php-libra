<?php

namespace PhpLibra\Wrapper;

use InvalidArgumentException;
use PhpLibra\CursorBuffer;

/**
 * Class AccountState.
 * A wrapper class to work with account state blob.
 * @package PhpLibra
 */
class AccountState
{
    public $address;
    public $balance;
    public $sequenceNumber;
    public $authenticationKey;
    public $sentEventsCount;
    public $receivedEventsCount;

    /**
     * AccountState constructor.
     * Create from blob.
     * @param $blob
     */
    public function __construct($blob)
    {
        if (!is_binary($blob)) {
            throw new InvalidArgumentException('Binary string is expected.');
        }

        $cursor = new CursorBuffer($blob);

        $mapEntryCount = $cursor->read32();
        $numBytesMapKey = $cursor->read32();
        $authenticationKey = $cursor->readHex($numBytesMapKey);
        $this->authenticationKey = $authenticationKey;
        $numBytesMapKey = $cursor->read32();
        $lenOfAuthKey = $cursor->read32();
        $this->address = $cursor->readHex($lenOfAuthKey);
        $this->balance = $cursor->read64();
        $this->receivedEventsCount = $cursor->read64();
        $this->sentEventsCount = $cursor->read64();
        $this->sequenceNumber = $cursor->read64();
    }

    /**
     * Return an array representation of this object.
     */
    public function toArray()
    {
        return [
            'address' => $this->address,
            'balance' => $this->balance,
            'sequenceNumber' => $this->sequenceNumber,
            'authenticationKey' => $this->authenticationKey,
            'sentEventsCount' => $this->sentEventsCount,
            'receivedEventsCount' => $this->receivedEventsCount,
        ];
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return json_encode($this->toArray(), true);
    }
}
