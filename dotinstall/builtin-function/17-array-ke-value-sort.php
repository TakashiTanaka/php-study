<?php

// 配列のキー・値のソート

$scores = [
  'taguchi' => 80,
  'hayashi' => 70,
  'kikuchi' => 60,
];

// sortやrsortはキーが削除されて連番になってしまう
// sort($scores);
// print_r($scores);
// rsort($scores);
// print_r($scores);

// asort・rsortを使えばキーが保持される
asort($scores);
print_r($scores);
arsort($scores);
print_r($scores);

// キーでソートしたい場合はksort, krsortを使えばok
ksort($scores);
print_r($scores);
krsort($scores);
print_r($scores);
