<?php

// ==========================================================================
// sort / rsort / shuffle / array_rand
// ==========================================================================

$scores = [30, 40, 50, 60, 70, 80];

sort($scores); // 小さい順に並び替える
print_r($scores);

shuffle($scores); // ランダムに並び替え（元の配列に変更が加えられるのに注意）
print_r($scores);

$picked = array_rand($scores, 2); // 指定した数のランダムなキーを配列で返す
echo $scores[$picked[0]] . PHP_EOL;
echo $scores[$picked[1]] . PHP_EOL;
