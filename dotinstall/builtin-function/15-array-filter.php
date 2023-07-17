<?php

// ==========================================================================
// array_filter
// ==========================================================================

// 渡した関数でテストする。trueだった場合にその要素を含んだ新しい配列を返す

$numbers = range(1, 10);

$evenNumbers = array_filter(
  $numbers,
  // function ($n) {
  //   return $n % 2 === 0;
  // }
  fn ($n) => $n % 2 === 0
);

print_r($evenNumbers);
