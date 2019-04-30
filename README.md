## GuzzleStream

让 Guzzle 支持 Swoole 的 PHP Stream Hook 协程

## 安装

支持的 Guzzle 版本：

- guzzle-6.0 `(>= 6.0.2)`
- guzzle-6.1
- guzzle-6.2
- guzzle-6.3

使用 Composer 安装：

```
composer require mix/guzzle-stream
```

在项目的 `composer.json` 文件中增加 `extra` 配置项，如下：

```
"extra": {
    "include_files": [
      "vendor/mix/guzzle-stream/src/functions_include.php"
    ]
}
```

## 原理

因为 Swoole 的 Hook 只支持 PHP Stream，Guzzle 库默认是使用 CURL 扩展，导致无法 Hook 为协程，本库修改了 Guzzle 的默认 Handler 为 StreamHandler，让依赖 Guzzle 库的第三方库可使用 Swoole 协程。

## License

Apache License Version 2.0, http://www.apache.org/licenses/