<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: validator_set.proto

namespace GPBMetadata;

class ValidatorSet
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\ValidatorPublicKeys::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a6f0a1376616c696461746f725f7365742e70726f746f12057479706573" .
            "22490a0c56616c696461746f7253657412390a1576616c696461746f725f" .
            "7075626c69635f6b65797318012003280b321a2e74797065732e56616c69" .
            "6461746f725075626c69634b657973620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

