<?php

use Ratchet\ConnectionInterface;
use Ratchet\Http\HttpServer;
use Ratchet\RFC6455\Messaging\MessageInterface;
use Ratchet\Server\IoServer;
use Ratchet\WebSocket\MessageComponentInterface;
use Ratchet\WebSocket\WsServer;

require_once 'vendor/autoload.php';

$chatComponent = new class implements MessageComponentInterface {

    private SplObjectStorage $connections;

    public function __construct()
    {
        $this->connections = new SplObjectStorage(); // you now have access to the public methods of ProductRepository
    }

    function onOpen(ConnectionInterface $conn)
    {
        echo 'Nova conexao'.PHP_EOL;
        $this->connections->attach($conn);
    }

    function onClose(ConnectionInterface $conn)
    {
        echo 'Fim de conexao'.PHP_EOL;
        $this->connections->detach($conn);
    }

    function onError(ConnectionInterface $conn, \Exception $e)
    {
        echo "error " . $e->getTraceAsString();
    }

    public function onMessage(ConnectionInterface $conn, MessageInterface $msg)
    {
        foreach ($this->connections as $connection) {
            if ($connection !== $conn) {
                $connection->send((string)$msg);
            }
        }
    }
};

$server = IoServer::factory(
    new HttpServer(
        new WsServer($chatComponent)
    ),
    8002
);
$server->run();