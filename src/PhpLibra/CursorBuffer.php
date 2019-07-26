<?php

namespace PhpLibra;

use Google\FlatBuffers\ByteBuffer;

/**
 * Class CursorBuffer.
 * A cursor base ByteBuffer.
 * @package PhpLibra
 */
class CursorBuffer extends ByteBuffer
{
    /**
     * CursorBuffer constructor.
     * @param string $bytes binary
     */
    public function __construct($bytes)
    {
        parent::__construct(0);
        $this->setPosition(0);
        $this->_buffer = $bytes;
    }

    /**
     * Read hex data.  Use this when reading hash address.
     * @param $bytes
     * @return string
     */
    public function readHex($bytes)
    {
        $buffer = bin2hex($this->_buffer);
        $start = $this->getPosition() * 2;
        $hex = '';
        for ($i = $start; $i < $start + ($bytes * 2); $i++) {
            $hex .= $buffer[$i];
        }
        $this->setPosition($this->getPosition() + $bytes);
        return $hex;
    }

    /**
     * Read x bytes
     * @param $x
     * @return int
     */
    public function readXBytes($x)
    {
        $pos = $this->getPosition();
        $value = $this->readLittleEndian($pos, $x);
        $this->setPosition($pos + $x);
        return $value;
    }

    /**
     * Read 1 byte
     * @return mixed
     */
    public function read8()
    {
        return $this->readXBytes(1);
    }

    /**
     * Read 4 bytes
     * @return mixed
     */
    public function read32()
    {
        return $this->readXBytes(4);
    }

    /**
     * Read 8 bytes
     * @return int
     */
    public function read64()
    {
        $amount =  $this->readXBytes(8);
        // TODO fix overflow problem
        if ($amount < 0) {
            $amount = 0;
        }
        return $amount;
    }

    public function readLongInt()
    {
        $firstPart = $this->read32();
        $secondPart = $this->read32();
        $combined =  $this->bcdechex($secondPart) . str_pad($firstPart, 8, '0');
        return $this->bchexdec($combined);
    }

    public function bchexdec($hex)
    {
        if (strlen($hex) == 1) {
            return hexdec($hex);
        } else {
            $remain = substr($hex, 0, -1);
            $last = substr($hex, -1);
            return bcadd(bcmul(16, $this->bchexdec($remain)), hexdec($last));
        }
    }

    public function bcdechex($dec)
    {
        $last = bcmod($dec, 16);
        $remain = bcdiv(bcsub($dec, $last), 16);
        if ($remain == 0) {
            return dechex($last);
        } else {
            return $this->bcdechex($remain).dechex($last);
        }
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return bin2hex($this->_buffer);
    }
}
