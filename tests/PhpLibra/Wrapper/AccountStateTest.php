<?php

namespace PhpLibra\Wrapper;

use InvalidArgumentException;

class AccountStateTest extends \BootstrapTest
{
    public function testConstructor()
    {
        $hex = '010000002100000001217da6c6b3e19f1825cfb2676daecce3bf3de03cf26647c78df00b371b25cc97440000002000000016b97442a710403a3fdf07159b653cb48c902fd724f02a1e9b16b55a85de8420804d8b4e17000000010000000000000000000000000000000100000000000000';
        $expected = [
            'address' => '16b97442a710403a3fdf07159b653cb48c902fd724f02a1e9b16b55a85de8420',
            'balance' => 100102000000,
            'sequenceNumber' => 1,
            'authenticationKey' => '01217da6c6b3e19f1825cfb2676daecce3bf3de03cf26647c78df00b371b25cc97',
            'sentEventsCount' => 0,
            'receivedEventsCount' => 1,
        ];

        $ac = new AccountState(hex2bin($hex));
        $this->assertTrue($ac instanceof AccountState);
        $this->assertEquals($expected['address'], $ac->address);
        $this->assertEquals($expected['balance'], $ac->balance);
        $this->assertEquals($expected['sequenceNumber'], $ac->sequenceNumber);
        $this->assertEquals($expected['authenticationKey'], $ac->authenticationKey);
        $this->assertEquals($expected['sentEventsCount'], $ac->sentEventsCount);
        $this->assertEquals($expected['receivedEventsCount'], $ac->receivedEventsCount);

        // test toArray
        $this->assertEquals($expected , $ac->toArray());

        // test toString
        $this->assertEquals(json_encode($expected, true) , (string)$ac);
    }

    public function testInvalidArgument()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Binary string is expected.');

        new AccountState('Not bytes');
    }
}
