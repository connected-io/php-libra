<?php

require __DIR__ . '/../vendor/autoload.php';

use PhpLibra\LibraClient;

main();

// Use the libra client
function main()
{
    $client = new LibraClient();
    $version = 79610;

    var_dump($client->getTransactionDetails($version));
}
