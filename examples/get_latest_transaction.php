<?php

require __DIR__ . '/../vendor/autoload.php';

use PhpLibra\LibraClient;

main();

// Use the libra client
function main()
{
    $client = new LibraClient();
    $version = $client->getLatestVersionNumber();
    $details = $client->getTransactionDetails($version);

    echo json_encode($details->toArray(), JSON_PRETTY_PRINT);
}
