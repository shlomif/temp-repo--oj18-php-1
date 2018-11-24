<?php

$data = array(
    'test1' => $_GET['test1'],
    'test2' => $_GET['test2'],
    'test3' => $_GET['test3'],
    'test4' => $_GET['test4'],
    'test5' => $_GET['test5']);

$inp = file_get_contents('file.json');
$tempArray = json_decode($inp);
$jsonData = json_encode($tempArray, JSON_PRETTY_PRINT);
file_put_contents('file.json', $jsonData);