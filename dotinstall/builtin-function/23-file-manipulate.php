<?php

// fopenを使わないファイルの開き方

$content = "taro\njiro\nsaburo\n";

// ファイルの書き込み。ファイル名と書き込む内容を引数に渡す
file_put_contents('name2.txt', $content);

// ファイルの読み込み
$content = file_get_contents('name2.txt');
echo $content;

// file関数で1行ずつ要素となっている配列を取得できる。オプションの指定も可能
$lines = file('name2.txt', FILE_IGNORE_NEW_LINES);
var_dump($lines);
