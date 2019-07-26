<?php

require __DIR__ . '/../vendor/autoload.php';

use PhpLibra\LibraClient;

main();

// Use the libra client
function main()
{
    $client = new LibraClient();
    echo $client->getLatestVersionNumber() . PHP_EOL;
}
