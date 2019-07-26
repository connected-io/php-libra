<?php

require __DIR__ . '/../vendor/autoload.php';

main();

function main()
{
    $client = new Admission_control\AdmissionControlClient('ac.testnet.libra.org:8000',
        ['credentials' => Grpc\ChannelCredentials::createInsecure()]
    );

    $request = new Types\UpdateToLatestLedgerRequest();

    list($response, $status) = $client->UpdateToLatestLedger($request)->wait();

    /** @var $ledgerInfo Types\LedgerInfo */
    $ledgerInfo = $response->getLedgerInfoWithSigs()->getLedgerInfo();

    printf("The version is %s.\n", $ledgerInfo->getVersion());
    printf("The transaction accumulator hash is %s.\n", bin2hex($ledgerInfo->getTransactionAccumulatorHash()));
    printf("The consensus data hash is %s.\n", bin2hex($ledgerInfo->getConsensusDataHash()));
    printf("The consensus block id is %s.\n", bin2hex($ledgerInfo->getConsensusBlockId()));
    printf("The epoch number is %s.\n", $ledgerInfo->getEpochNum());
    printf("The timestamp Usecs is %s.\n", $ledgerInfo->getTimestampUsecs());
}
