<?php

// ファイルに文字列を追記する

// aはappendの意味。追記モード
$fp = fopen('name.txt', 'a');

fwrite($fp, "jiro\n");
fwrite($fp, "saburo\n");

fclose($fp);
