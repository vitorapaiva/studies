<?php

$streamList = [
	fopen('arquivo.txt', 'r');
	fopen('arquivo2.txt', 'r');
];


foreach($streamList as $stream) {
	stream_set_block($stream, false);
}


do {
	$copyReadStream = $streamList.
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