<?php

use PhpLibra\CursorBuffer;

class CursorBufferTest extends BootstrapTest
{
    public function testGetInt()
    {
        $cursor = new CursorBuffer(hex2bin('44000000'));
        $this->assertEquals(68, $cursor->getInt(0));
    }

    public function testRead8()
    {
        $cursor = new CursorBuffer(hex2bin('21000000'));
        $this->assertEquals(33, $cursor->read8());
    }

    public function testRead64()
    {
        $cursor = new CursorBuffer(hex2bin('a0acb90300000000'));
        $this->assertEquals(62500000, $cursor->read64());
    }

    public function testMultipleReads()
    {
        $cursor = new CursorBuffer(hex2bin('a0acb90300000000010000000000000004000000000000000400000000000000'));
        $this->assertEquals(62500000, $cursor->read64());
        $this->assertEquals(1, $cursor->read64());
        $this->assertEquals(4, $cursor->read64());
        $this->assertEquals(4, $cursor->read64());
    }
}
