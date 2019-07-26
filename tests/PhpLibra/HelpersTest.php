<?php

class HelpersTest extends BootstrapTest
{
    public function testIsBinary()
    {
        $address = '16b97442a710403a3fdf07159b653cb48c902fd724f02a1e9b16b55a85de8420';
        $this->assertFalse(is_binary($address));

        $addressBinary = hex2bin($address);
        $this->assertTrue(is_binary($addressBinary));
    }
}
