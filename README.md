## GuzzleStream

让 Guzzle 支持 Swoole 的 PHP Stream Hook

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

## License

Apache License Version 2.0, http://www.apache.org/licenses/