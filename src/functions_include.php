<?php

/* @var GuzzleHttp\Client $class */
$class = 'GuzzleHttp\Client';
if (!class_exists($class)) {
    return;
}
$ver = $class::VERSION;
$dir = "guzzle-{$ver}";
if (!is_dir($dir)) {
    return;
}
require __DIR__ . "/{$dir}/functions.php";
