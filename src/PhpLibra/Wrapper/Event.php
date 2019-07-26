<?php

namespace PhpLibra\Wrapper;

use PhpLibra\CursorBuffer;
use Types\Event as TypesEvent;

/**
 * Class Event
 * @package PhpLibra\Wrapper
 */
class Event
{
    public $fromAddress;
    public $toAddress;
    public $amount;
    public $path;
    public $hash;
    public $suffix;
    public $sequenceNumber;
    public $eventData;

    public function __construct(TypesEvent $event)
    {
        $accessPath = $event->getAccessPath();
        $this->fromAddress = bin2hex($accessPath->getAddress());
        $this->path = bin2hex($accessPath->getPath());

        $cursor = new CursorBuffer($accessPath->getPath());
        $unknown = $cursor->read8();
        $numBytes = $cursor->read8();
        $hash = $cursor->readHex($numBytes);
        $this->hash = $hash;

        $suffix = $this->parseSuffix($accessPath->getPath());
        $this->suffix = $suffix;

        $this->sequenceNumber = $event->getSequenceNumber();
        $this->eventData = bin2hex($event->getEventData());

        $cursor = new CursorBuffer($event->getEventData());
        $amount = $cursor->read32();
        $unknow1 = $cursor->read32();
        $addressBytes = $cursor->read32();
        $toAddress = $cursor->readHex($addressBytes);

        $this->amount = $amount;
        $this->toAddress = $toAddress;
    }

    private function parseSuffix($path)
    {
        if (strpos($path, 'sent_events_count') !== false) {
            return 'sent_events_count';
        } elseif (strpos($path, 'received_events_count') !== false) {
            return 'received_events_count';
        } else {
            return '';
        }
    }

    public function toArray()
    {
        return [
            'fromAddress' => $this->fromAddress,
            'toAddress' => $this->toAddress,
            'path' => $this->path,
            'hash' => $this->hash,
            'suffix' => $this->suffix,
            'sequenceNumber' => $this->sequenceNumber,
            'eventData' => $this->eventData,
            'amount' => $this->amount,
        ];
    }

    public function __toString()
    {
        return json_encode($this->toArray(), true);
    }
}
