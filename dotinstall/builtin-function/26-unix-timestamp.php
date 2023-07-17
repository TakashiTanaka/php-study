<?php

// UNIXタイムスタンプの理解
// グリニッジ標準時（1970/01/01 00:00:00 GMT）からの経過秒数のこと

// 現在のUNIXタイムスタンプ
echo time() . PHP_EOL;

echo date('Y-m-d l', time()) . PHP_EOL;

echo date('Y-m-d l', mktime(0, 0, 0, 5, 1, 2022)) . PHP_EOL;

echo date('Y-m-d l', strtotime('2020-05-07')) . PHP_EOL;

echo date('Y-m-d l', strtotime('2020-05-07 + 1day')) . PHP_EOL;

// 32bitのマシンだと2038年にうまくいかないので、現在ではDateTimeクラスを使用するのが一般的
