<?php

function dd($data){
	echo '<pre>';
	var_dump($data);
	echo '</pre>';
	die();
}

function isOldEnough(int $age){
	return $age < 21;
}