<?php

$streamList = [
    stream_socket_client('tcp://php-fpm:9000'),
    fopen('arquivo1.txt', 'rb'),
	fopen('arquivo2.txt', 'rb')
];

fwrite($streamList[0], 'GET /http-server.php HTTP/1.1'. PHP_EOL . PHP_EOL);

foreach($streamList as $stream) {
	stream_set_blocking($stream, false);
}


do {
	$copyReadStream = $streamList;
	$streamQty = stream_select($copyReadStream, $write, $except, 0, 200000);

	if($streamQty === 0 ) {
		echo 'passou aqui';
		continue;
	}

	foreach($copyReadStream as $key => $stream) {
		$conteudo = fgets($stream);
		$posicao = strpos($conteudo, PHP_EOL.PHP_EOL);
		if($posicao !== false) {
			echo substr($conteudo, $posicao + 4 );
		}
		else {
			echo $conteudo;
		}
		unset($streamList[$key]);
	}

} while(!empty($streamList));


echo "Li todos os arquivos". PHP_EOL;