<?php

// ==========================================================================
// array_slice
// ==========================================================================

// sliceは新しい配列を作って返す
$scores = [30, 40, 50, 60, 70];
$partial = array_slice($scores, 2, 3);
$partial = array_slice($scores, 2);
$partial = array_slice($scores, -2); // -で指定すると末尾から数えた位置になる

print_r($scores);
print_r($partial);
