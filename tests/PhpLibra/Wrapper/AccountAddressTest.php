<?php

namespace PhpLibra\Wrapper;

use InvalidArgumentException;

class AccountAddressTest extends \BootstrapTest
{
    public function testCreateWithString()
    {
        $addressString = '16b97442a710403a3fdf07159b653cb48c902fd724f02a1e9b16b55a85de8420';
        $address = new AccountAddress($addressString);
        $this->assertTrue($address instanceof AccountAddress);
    }

    public function testCreateWithStringInvalidAddress()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('1234 is an invalid address.');

        $addressString = '1234';
        $address = new AccountAddress($addressString);
        $this->assertTrue($address instanceof AccountAddress);
    }

    public function testCreateWithBytes()
    {
        $addressString = '16b97442a710403a3fdf07159b653cb48c902fd724f02a1e9b16b55a85de8420';
        $address = new AccountAddress(hex2bin($addressString));
        $this->assertTrue($address instanceof AccountAddress);
    }

    public function testCreateWithBytesInvalidAddress()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('4 is an invalid address.');

        $addressString = '1234';
        $address = new AccountAddress(hex2bin($addressString));
        $this->assertTrue($address instanceof AccountAddress);
    }

    public function testToBytes()
    {
        $addressString = '16b97442a710403a3fdf07159b653cb48c902fd724f02a1e9b16b55a85de8420';
        $address = new AccountAddress($addressString);
        $this->assertEquals(hex2bin($addressString), $address->toBytes());
    }

    public function testToHex()
    {
        $addressString = '16b97442a710403a3fdf07159b653cb48c902fd724f02a1e9b16b55a85de8420';
        $address = new AccountAddress($addressString);
        $this->assertEquals($addressString, $address->toHex());
    }

    public function testToString()
    {
        $addressString = '16b97442a710403a3fdf07159b653cb48c902fd724f02a1e9b16b55a85de8420';
        $address = new AccountAddress($addressString);
        $this->assertEquals($addressString, (string)$address);
    }
}
