<?php

// 判断环境
$class = 'GuzzleHttp\Client';
if (!class_exists($class)) {
    return;
}
$class = 'Swoole\Runtime';
if (!class_exists($class)) {
    return;
}

// 开启 Swoole Hook
\Swoole\Runtime::enableCoroutine(true);

// 替换默认 Handler
$ver = $class::VERSION;
$ver = explode('.', $ver);
array_pop($ver);
$ver = implode('.', $ver);
$dir = "guzzle-{$ver}";
if (!is_dir($dir)) {
    return;
}
require __DIR__ . "/functions.php";
require __DIR__ . "/{$dir}/functions.php";
