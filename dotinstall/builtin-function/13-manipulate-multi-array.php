<?php

// ==========================================================================
// array_merge / array_unique / array_diff / array_intersect
// ==========================================================================

// 複数の配列の操作

// 配列同士の演算

$a = [3, 4, 8];
$b = [4, 8, 12];

// 連結
$merged = array_merge($a, $b);
$merged = [...$a, ...$b]; // これでもOK
print_r($merged);

// 重複した値を取り除く
$uniques = array_unique($merged);
print_r($uniques);

// 第1引数にある要素から第2引数にある要素を引く
$diff = array_diff($a, $b);
print_r($diff);

$diff2 = array_diff($b, $a);
print_r($diff2);

// 第1引数と第2引数の要素で共通の要素を抽出
$common = array_intersect($a, $b);
print_r($common);
