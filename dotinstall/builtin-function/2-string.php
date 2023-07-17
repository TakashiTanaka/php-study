<?php

// ==========================================================================
// strlen / trim / strpos / str_replace
// ==========================================================================

$input = ' my_name ';

// 文字の前後の空白を除去
$input = trim($input);

// 文字列の長さを取得
echo strlen($input) . PHP_EOL;

// 第2引数に渡した文字列の位置を取得
echo strpos($input, '_') . PHP_EOL;

// 文字列を置換する
$input = str_replace('_', '-', $input);
echo $input . PHP_EOL;
