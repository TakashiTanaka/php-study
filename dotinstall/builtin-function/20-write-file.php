<?php

// ファイルに文字列を書き込む

// wはwriteの意味。書き込みモード
$fp = fopen('name.txt', 'w');

fwrite($fp, "taro\n");

fclose($fp);
