<?php

// ==========================================================================
// ceil / floor / round / mt_rand / max / min / M_PI / M_SQRT2
// ==========================================================================

// 数値演算系の関数

$n = 5.62432;

echo ceil($n) . PHP_EOL; // 小数点以下切り上げ
echo floor($n) . PHP_EOL; // 小数点以下切り捨て
echo round($n) . PHP_EOL; // 四捨五入
echo round($n, 2) . PHP_EOL; // 小数点以下2桁にする指定
echo mt_rand(1, 6) . PHP_EOL; // ランダムな整数を生成
echo max(1, 6, 8) . PHP_EOL; // 最大値を返す
echo min(1, 6, 8) . PHP_EOL; // 最小値を返す
echo M_PI . PHP_EOL; // 円周率を返す
echo M_SQRT2 . PHP_EOL; // 2の平方根を返す
