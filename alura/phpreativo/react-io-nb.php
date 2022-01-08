<?php
require_once 'vendor/autoload.php';

use React\EventLoop\Loop;
use React\Http\Browser;
use React\Stream\ReadableResourceStream;

$loop = Loop::get();

$client = new Browser();

$client->get('http://webserver/http-server.php')->then(
    function (Psr\Http\Message\ResponseInterface $response) {
        echo $response->getBody()->getContents();
    },
    function (Exception $error) {
        var_dump('There was an error', $error->getMessage());
    }
);

$streamList = [
    new ReadableResourceStream(stream_socket_client('tcp://php-fpm:8001'), $loop),
    new ReadableResourceStream(fopen('arquivo1.txt', 'rb'), $loop),
    new ReadableResourceStream(fopen('arquivo2.txt', 'rb'), $loop)
];

foreach ($streamList as $stream) {
    $stream->on('data', function (string $data) {
        echo $data . PHP_EOL;
    });
}

$loop->run();