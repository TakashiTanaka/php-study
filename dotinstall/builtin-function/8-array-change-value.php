<?php

// ==========================================================================
// array_unshift / array_push / array_shift / array_pop
// ==========================================================================

$scores = [30, 40, 50];

array_unshift($scores, 10, 20); // 先頭に追加
array_push($scores, 60, 70); // 末尾に追加
$scores[] = 80; // 末尾に追加
array_shift($scores); // 先頭を削除
array_pop($scores); // 末尾を削除

print_r($scores);
