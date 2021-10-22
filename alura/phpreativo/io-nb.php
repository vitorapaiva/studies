<?php

$streamList = [
    stream_socket_client('tcp://webserver:80'),
    fopen('arquivo1.txt', 'rb'),
	fopen('arquivo2.txt', 'rb')
];

fwrite($streamList[0], '');
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
		echo fgets($stream);
		unset($streamList[$key]);
	}

} while(!empty($streamList));


echo "Li todos os arquivos". PHP_EOL;