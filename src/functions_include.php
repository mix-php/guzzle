<?php

// 判断环境
if (!class_exists('GuzzleHttp\Client')) {
    return;
}
if (!class_exists('Swoole\Runtime')) {
    return;
}

// 开启 Swoole Hook
\Swoole\Runtime::enableCoroutine(true);

// 替换默认 Handler
$class = 'GuzzleHttp\Client';
$ver   = $class::VERSION;
$ver   = explode('.', $ver);
array_pop($ver);
$ver = implode('.', $ver);
$dir = "/guzzle-{$ver}";
if (!is_dir(__DIR__ . "/{$dir}")) {
    return;
}
require __DIR__ . "/functions.php";
require __DIR__ . "/{$dir}/functions.php";
