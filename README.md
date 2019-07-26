# php-libra

A php library to work with the Libra gRPC client and protobuf.

### Sample Code

```php
require __DIR__ . '/../vendor/autoload.php';

use PhpLibra\LibraClient;

main();

// Get the latest version
function main()
{
    $client = new LibraClient();
    echo $client->getLatestVersionNumber() . PHP_EOL;
}
```

## Examples

The best place to learn about the library is to read the example code.

```
php examples/get_account_state.php
php examples/get_balance.php
```

## Installation with composer

```bash
composer install php-libra
```

## Note to Developers

* Libra Core is a prototype and so is this libray.
* The APIs are constantly evolving and changing.

## Protobuf Installation

Official gRPC documentation [here](https://grpc.io/docs/quickstart/php/)

For Ubuntu LTS 18.04

```bash
sudo apt-get install php php-dev php-pear phpunit composer protobuf-compiler-grpc libz-dev

# Install pecl
sudo pecl install grpc

# To get your current php version
php -v

# Enable gRPC extension. Example is php 7.2
sudo vi /etc/php/7.2/cli/php.ini
# for php-fpm
sudo vi /etc/php/7.2/fpm/php.ini
# for apache
sudo vi /etc/php/7.2/apache/php.ini

# Add at the end of the file and restart your services.
extension=grpc.so

# Check that grpc extension is enabled
# Should show something.
php -i | grep grpc
```

## Build protobufs for php

All *.proto files are from libra repo.
https://github.com/libra/libra/tree/master/types/src/proto

```bash
protoc -I proto --php_out=src --grpc_out=src --plugin=protoc-gen-grpc=`which grpc_php_plugin` proto/*.proto
```

The above command will generate php protobuf in the following folders.

- src/Admission_control
- src/GPBMetadata
- src/Mempool
- src/Types

The only code that is editable for the library resides in src/PhpLibra

The above command will auto generate php proto files to lib folder

## Other Packages

A lot of ideas and inspirations for this package were taken from

- https://github.com/perfectmak/libra-core
- https://github.com/egorsmkv/libra-grpc-py
- https://github.com/Disk1n/LibraBrowser

## Common Errors

```
PHP Fatal error:  Uncaught Error: Class 'Grpc\ChannelCredentials' not found in ../code/php-libra/examples/update_to_latest.php:10
```

You do not have the grpc library enabled. `php -i | grep grpc` should return something.  Add `extension=grpc.so` to your php.ini.  See above.

```
Class 'Grpc\ChannelCredentials' not found
```

Missing grpc.so on your php server.  Either `../fpm/php.ini` or `../apache/php.ini`  Check `phpinfo()` for grpc to appear.  Restart your server.

## Maintainers

- ykhov@connected.io - Yada Khov

An open source library from:

[![connectedlogo_blue](https://user-images.githubusercontent.com/37081225/52149791-ef3a1d80-263b-11e9-9a31-5b50a131d131.png)](https://www.connected.io/)
