<?php
require_once 'vendor/autoload.php';

use React\EventLoop\Loop;
use React\Stream\ReadableResourceStream;

$loop = Loop::get();

$stream = new ReadableResourceStream(
    fopen('arquivo1.txt', 'rb'),
    $loop
);

$stream->on('data', function (string $data) {
    echo $data;
});

$loop->run();