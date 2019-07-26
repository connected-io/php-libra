<?php

require __DIR__ . '/../vendor/autoload.php';

use PhpLibra\LibraClient;

main();

// Use the libra client
function main()
{
    $client = new LibraClient();

    $address = '16b97442a710403a3fdf07159b653cb48c902fd724f02a1e9b16b55a85de8420';

    printf("The sequence number is: %s\n", $client->getSequenceNumber($address));
}
