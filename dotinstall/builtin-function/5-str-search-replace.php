<?php

// ==========================================================================
// preg_match / preg_match_all / preg_replace
// ==========================================================================

// preg_match
// 文字列に対して、正規表現で最初にマッチする文字列を取得し、配列で返す

// preg_match_all
// 文字列に対して、正規表現でマッチする全ての文字列を取得し、配列で返す

// preg_replace
// 文字列に対して、正規表現にマッチした文字列を指定した文字列で置換して、文字型で返す

$input = 'Call us at 03-3001-1256 or 03-3015-3222';

$pattern = '/\d{2}-\d{4}-\d{4}/';
preg_match_all($pattern, $input, $matches);
print_r($matches);

$pattern = '/\d{2}-\d{4}-\d{4}/';
$input = preg_replace($pattern, '**-****-****', $input);
echo $input . PHP_EOL;
