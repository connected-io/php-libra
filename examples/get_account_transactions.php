<?php

require __DIR__ . '/../vendor/autoload.php';

use PhpLibra\LibraClient;

main();

// Use the libra client
function main()
{
    $client = new LibraClient();

    $address = '9a87e5a82bd9729ed6e1b9217255ced0c6cca51dc9767efc7f9a50e26a84b300';

    var_dump($client->getAccountTransactions($address, 10, true));
}
