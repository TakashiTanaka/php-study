<?php

// ==========================================================================
// sprintf
// ==========================================================================

// フォーマットを指定して文字列を作る

$name = 'apple';
$score = 32.246;

$info = "[$name][$score]";
echo $info . PHP_EOL;

$info = sprintf("[%15s][%10.2f]", $name, $score);
echo $info . PHP_EOL;

$info = sprintf("[%-15s][%010.2f]", $name, $score);
echo $info . PHP_EOL;

$info = printf("[%-15s][%010.2f]" . PHP_EOL, $name, $score);
