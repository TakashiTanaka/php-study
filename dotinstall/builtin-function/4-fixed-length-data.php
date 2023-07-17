<?php

// ==========================================================================
// 固定長データを扱う
// substr / substr_replace / number_format
// ==========================================================================

// substrは文字列に対して、範囲を指定して文字列を取得
// substr_replaceは文字列に対して、範囲を指定して文字列を置換
// number_formatは数値をカンマ区切りの文字列に変換する

$input = '20200320Item-A  1200';
$input = substr_replace($input, 'Item-B  ', 8, 8);

$date = substr($input, 0, 8);
$product = substr($input, 8, 8);
$amount = substr($input, 16);

echo $date . PHP_EOL;
echo $product . PHP_EOL;
echo $amount . PHP_EOL;

echo number_format($amount) . PHP_EOL;
