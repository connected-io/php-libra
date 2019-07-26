<?php

namespace PhpLibra\Wrapper;

use Types\Event as TypesEvent;

class EventTest extends \BootstrapTest
{
    public function testConstructor()
    {
        $serializedEventJson = '{"accessPath":{"address":"pdKxUXgqmQ2bu01dJB6ezwxQgnDC3f+LUkYY/6OlkNo=","path":"ASF9psaz4Z8YJc+yZ22uzOO/PeA88mZHx43wCzcbJcyXL3NlbnRfZXZlbnRzX2NvdW50Lw=="},"sequenceNumber":"3","eventData":"QEIPAAAAAAAgAAAApdKxUXgqmQ2bu01dJB6ezwxQgnDC3f+LUkYY/6OlkNo="}';

        $te = new TypesEvent();
        $te->mergeFromJsonString($serializedEventJson);

        $event = new Event($te);;

        $this->assertEquals('a5d2b151782a990d9bbb4d5d241e9ecf0c508270c2ddff8b524618ffa3a590da', $event->fromAddress);
        $this->assertEquals('a5d2b151782a990d9bbb4d5d241e9ecf0c508270c2ddff8b524618ffa3a590da', $event->toAddress);
        $this->assertEquals(1000000, $event->amount);
        $this->assertEquals('01217da6c6b3e19f1825cfb2676daecce3bf3de03cf26647c78df00b371b25cc972f73656e745f6576656e74735f636f756e742f', $event->path);
        $this->assertEquals('7da6c6b3e19f1825cfb2676daecce3bf3de03cf26647c78df00b371b25cc972f73', $event->hash);
        $this->assertEquals('sent_events_count', $event->suffix);
        $this->assertEquals(3, $event->sequenceNumber);
        $this->assertEquals('40420f000000000020000000a5d2b151782a990d9bbb4d5d241e9ecf0c508270c2ddff8b524618ffa3a590da', $event->eventData);
    }
}
