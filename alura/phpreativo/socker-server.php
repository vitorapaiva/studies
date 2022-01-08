<?php

$socket = stream_socket_server('tcp://php-fpm:8001');

$con = stream_socket_accept($socket);

$espera = rand(1,5);

sleep($espera);

fwrite($con, 'Resposta do socket apos '.$espera.' segundos');