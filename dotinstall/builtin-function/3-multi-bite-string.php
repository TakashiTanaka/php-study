<?php

// ==========================================================================
// mb_strlen / mb_strpos
// ==========================================================================

$input = ' こんにちは ';
$input = trim($input);

// マルチバイト文字列を扱うときはmb_が接頭辞の専用関数がある
echo mb_strlen($input) . PHP_EOL;
echo mb_strpos($input, 'に') . PHP_EOL;

$input = str_replace('にち', 'ばん', $input);
echo $input . PHP_EOL;
