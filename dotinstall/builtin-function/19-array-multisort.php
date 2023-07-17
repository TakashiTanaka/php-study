<?php

// array_multisort

$data = [
  ['name' => 'taguchi', 'score' => 80,],
  ['name' => 'kikuchi', 'score' => 60,],
  ['name' => 'hayashi', 'score' => 70,],
  ['name' => 'tamachi', 'score' => 60,],
];

// array_columnで$dataの中から指定したキーの値を抽出した配列を取得
$scores = array_column($data, 'score');
$names = array_column($data, 'name');

// print_r($scores);
// print_r($names);

// array_multisortは配列を直接書き換える
// オプションを渡す事ができる
array_multisort(
  $scores,
  SORT_DESC,
  SORT_NUMERIC,
  $names,
  SORT_DESC,
  SORT_STRING,
  $data
);

print_r($data);
