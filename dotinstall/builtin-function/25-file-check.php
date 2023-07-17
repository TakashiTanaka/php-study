<?php

// 存在・読み書き可能かチェックする

// if (file_exists('data/saburo.txt') === false) {
if (!file_exists('data/saburo.txt')) {
  echo 'Saburo not here' . PHP_EOL;
  exit; // 処理を中断
}

if (file_exists('data') === true) {
  echo 'data exists!' . PHP_EOL;
}

if (is_writable('data/taro.txt') === true) {
  echo 'taro is writable!' . PHP_EOL;
}

if (is_readable('data/taro.txt') === true) {
  echo 'taro is readable' . PHP_EOL;
}
