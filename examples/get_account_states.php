<?php

require __DIR__ . '/../vendor/autoload.php';

use PhpLibra\LibraClient;

main();

// Use the libra client
function main()
{
    $client = new LibraClient();

    $addresses = [
        '16b97442a710403a3fdf07159b653cb48c902fd724f02a1e9b16b55a85de8420',
        'd210e0188ac653c73bef5bbfc474b4f0034574edb5dfaf0092ca8abc02b97442',
    ];

    $accountStates = $client->getAccountStates($addresses);

    var_dump($accountStates);
}
