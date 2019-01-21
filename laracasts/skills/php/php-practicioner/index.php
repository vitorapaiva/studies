<?php


$person=[
'age'=>31,
'hair'=>'brown',
'career' => 'web developer'
];

$person['name']='Vitor';

unset($person['age']);

$task=[
'title'=>'Test Task',
'due'=>'18/01/2019',
'assigned_to' => 'Vitor',
'completed' => true
];

require 'index.view.php';