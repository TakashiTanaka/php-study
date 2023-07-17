<?php

// usort

$data = [
  ['name' => 'taguchi', 'score' => 80,],
  ['name' => 'hayashi', 'score' => 70,],
  ['name' => 'kikuchi', 'score' => 60,],
];

// usortはもとの配列を書き換えてしまう
// 第2引数は比較関数
usort($data, function ($a, $b) {
  if ($a['score'] === $b['score']) {
    return 0;
  }
  return $a['score'] > $b['score'] ? 1 : -1;
});

print_r($data);
