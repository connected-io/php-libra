<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: admission_control.proto

namespace GPBMetadata;

class AdmissionControl
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\GetWithProof::initOnce();
        \GPBMetadata\MempoolStatus::initOnce();
        \GPBMetadata\Transaction::initOnce();
        \GPBMetadata\VmErrors::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0acd050a1761646d697373696f6e5f636f6e74726f6c2e70726f746f1211" .
            "61646d697373696f6e5f636f6e74726f6c1a146d656d706f6f6c5f737461" .
            "7475732e70726f746f1a117472616e73616374696f6e2e70726f746f1a0f" .
            "766d5f6572726f72732e70726f746f22480a185375626d69745472616e73" .
            "616374696f6e52657175657374122c0a0a7369676e65645f74786e180120" .
            "01280b32182e74797065732e5369676e65645472616e73616374696f6e22" .
            "e1010a195375626d69745472616e73616374696f6e526573706f6e736512" .
            "240a09766d5f73746174757318012001280b320f2e74797065732e564d53" .
            "74617475734800123e0a0961635f73746174757318022001280e32292e61" .
            "646d697373696f6e5f636f6e74726f6c2e41646d697373696f6e436f6e74" .
            "726f6c5374617475734800123e0a0e6d656d706f6f6c5f73746174757318" .
            "032001280e32242e6d656d706f6f6c2e4d656d706f6f6c4164645472616e" .
            "73616374696f6e537461747573480012140a0c76616c696461746f725f69" .
            "6418042001280c42080a067374617475732a450a1641646d697373696f6e" .
            "436f6e74726f6c537461747573120c0a0841636365707465641000120f0a" .
            "0b426c61636b6c69737465641001120c0a0852656a6563746564100232e7" .
            "010a1041646d697373696f6e436f6e74726f6c12700a115375626d697454" .
            "72616e73616374696f6e122b2e61646d697373696f6e5f636f6e74726f6c" .
            "2e5375626d69745472616e73616374696f6e526571756573741a2c2e6164" .
            "6d697373696f6e5f636f6e74726f6c2e5375626d69745472616e73616374" .
            "696f6e526573706f6e7365220012610a14557064617465546f4c61746573" .
            "744c656467657212222e74797065732e557064617465546f4c6174657374" .
            "4c6564676572526571756573741a232e74797065732e557064617465546f" .
            "4c61746573744c6564676572526573706f6e73652200620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}
