<?php

// ディレクトリの操作
// file_put_contents('data/taro.txt', "taro\n");
// file_put_contents('data/jiro.txt', "jiro\n");

$dp = opendir('data');

// ディレクトリの中身を表示
while (($item = readdir($dp)) !== false) {
  // .と..のときはスキップ
  if ($item === '.' || $item === '..') {
    continue;
  }
  echo $item . PHP_EOL;
}

// 上記と同じことができるもう一つの方法
foreach (glob('data/*.txt') as $item) {
  // echo $item . PHP_EOL;
  echo basename($item) . PHP_EOL; // ファイル名だけ取り出し時はbasename関数を使う
}
