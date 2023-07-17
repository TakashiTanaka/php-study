<?php

// 配列のキー・値の操作

$scores = [
  'taguchi' => 80,
  'hayashi' => 70,
  'kikuchi' => 60,
];

// キーだけ取り出す
$keys = array_keys($scores);
print_r($keys);

// 値だけを取り出す
$values = array_values($scores);
print_r($values);

// 特定のキーが存在しているかチェック
if (array_key_exists('taguchi', $scores) === true) {
  echo 'taguchi is here!' . PHP_EOL;
}

// 特定の値が存在しているかチェック
if (in_array(80, $scores) === true) {
  echo '80 is here!' . PHP_EOL;
}

// 特定の値からキーを取得する
echo array_search(70, $scores) . PHP_EOL;
