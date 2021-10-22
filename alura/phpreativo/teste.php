<?php

use GuzzleHttp\Client;
use GuzzleHttp\Promise\Utils;

require_once 'vendor/autoload.php';

$client = new Client();

$promise1 = $client->getAsync('http://webserver:80/http-server.php');
$promise2 = $client->getAsync('http://webserver:80/http-server.php');

$respostas = Utils::unwrap([
	$promise1, $promise2
]);

echo 'Resposta 1: '.$respostas[0]->getBody()->getContents(); 
echo 'Resposta 2: '.$respostas[1]->getBody()->getContents(); 