<?php

$res = file_get_contents('./randvideo.txt');
$arr = explode("\n", $res);
shuffle($arr);
$rand = array_rand($arr, 100);

$url = array();
foreach ($rand as $key => $value) {
    array_push($url, $arr[$key]);
}

echo implode(PHP_EOL, $url);
