<?php

namespace PhpLibra\Wrapper;

use InvalidArgumentException;
use PhpLibra\CursorBuffer;
use Types\RawTransaction;

/**
 * Class Transaction
 * A wrapper class to work with transaction state blob.
 * @package PhpLibra
 */
class Transaction
{
    public $fromAddress = '';
    public $toAddress = '';
    public $amount = 0;
    public $sequenceNumber = 0;
    public $maxGasAmount = 0;
    public $gasUnitPrice = 0;
    public $expirationTime = 0;
    public $payload = '';
    public $writeSet = '';

    /**
     * Transaction constructor.
     * Create from blob.
     * @param $blob
     * @throws \Exception
     */
    public function __construct($blob)
    {
        if (!is_binary($blob)) {
            throw new InvalidArgumentException('Binary string is expected.');
        }

        $raw = new RawTransaction();
        $raw->mergeFromString($blob);

        $program = $raw->getProgram();

        $this->fromAddress = bin2hex($raw->getSenderAccount());

        $toAddressBytes = $program->getArguments()->offsetGet(0)->getData();
        $this->toAddress = bin2hex($toAddressBytes);

        $amountBytes = $program->getArguments()->offsetGet(1)->getData();
        $cursor = new CursorBuffer($amountBytes);
        $this->amount = $cursor->read64();

        $this->sequenceNumber = $raw->getSequenceNumber();
        $this->maxGasAmount = $raw->getMaxGasAmount();
        $this->gasUnitPrice = $raw->getGasUnitPrice();
        $this->expirationTime = $raw->getExpirationTime();
        $this->payload = $raw->getPayload();
        $this->writeSet = $raw->getWriteSet();
    }

    public function toArray()
    {
        return [
            'fromAddress' => $this->fromAddress,
            'toAddress' => $this->toAddress,
            'amount' => $this->amount,
            'sequenceNumber' => $this->sequenceNumber,
            'maxGasAmount' => $this->maxGasAmount,
            'gasUnitPrice' => $this->gasUnitPrice,
            'expirationTime' => $this->expirationTime,
            'payload' => $this->payload,
            'writeSet' => $this->writeSet,
        ];
    }

    public function __toString()
    {
        return json_encode($this->toArray(), true);
    }
}
