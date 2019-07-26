<?php

require __DIR__ . '/../vendor/autoload.php';

use Types\RawTransaction;

// Base 64 decode

$string = '0a2016b97442a710403a3fdf07159b653cb48c902fd724f02a1e9b16b55a85de8420100428904e38c2a6b8e9051ae8010ab3014c49425241564d0a010007014a00000004000000034e000000060000000c54000000050000000d5900000004000000055d0000002900000004860000002000000007a60000000d00000000000001000200010300020002040203020402063c53454c463e0c4c696272614163636f756e74046d61696e0f7061795f66726f6d5f73656e64657200000000000000000000000000000000000000000000000000000000000000000001020004000c000c01110102122408011220d210e0188ac653c73bef5bbfc474b4f0034574edb5dfaf0092ca8abc02b97442120a1208002d310100000000';

$txn = new RawTransaction();
$txn->mergeFromString(hex2bin($string));

printf("getSequenceNumber: %s\n", $txn->getSequenceNumber());
printf("getExpirationTime: %s\n", $txn->getExpirationTime());
printf("getGasUnitPrice: %s\n", $txn->getGasUnitPrice());
printf("getMaxGasAmount: %s\n", $txn->getMaxGasAmount());
printf("getProgram: %s\n", get_class($txn->getProgram()));
printf("getPayload: %s\n", $txn->getPayload());
printf("getSenderAccount: %s\n", $txn->getSenderAccount());
printf("getWriteSet: %s\n", $txn->getWriteSet());
