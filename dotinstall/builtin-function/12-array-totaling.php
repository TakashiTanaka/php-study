<?php

// ==========================================================================
// array_fill / range / array_sum / max / min
// ==========================================================================

// 配列の値の集計

$scores = [30, 40, 50, 60, 70, 80];

$scores = array_fill(0, 5, 10); // 位置と数と値を指定して、配列を作る
$scores = range(1, 10); // 指定した値から始まる配列を作る
$scores = range(1, 10, 2); // 第3引数で刻みの数を決められる
print_r($scores);

echo array_sum($scores) . PHP_EOL; // 要素の合計
echo max($scores) . PHP_EOL; // 要素の最大値
echo min($scores) . PHP_EOL; // 要素の最小値
echo array_sum($scores) / count($scores) . PHP_EOL; // 平均