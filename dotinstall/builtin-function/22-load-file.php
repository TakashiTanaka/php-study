<?php

// ファイルの読み込み

// // rはreadの意味。読み取りモード
// $fp = fopen('name.txt', 'r');

// // サイズを指定して一気に読み込むfread関数。
// $content = fread($fp, filesize('name.txt'));

// fclose($fp);

// echo $content;

// ファイルが大きい場合は1行ずつ読み込むこともできる
$fp = fopen('name.txt', 'r');

// whileで1行ずつechoする
while (($line = fgets($fp)) !== false) {
  echo $line;
}

fclose($fp);
