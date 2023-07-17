<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  /* 関数コンポーネントを読み込み */
  foreach (glob('components/*.php') as $filename) {
    include_once $filename;
  }
  ?>
  <?php Test(); ?>
  <?php Test('引数で与えたテキスト'); ?>
  <?php Button(); ?>
  <?php Button('引数で与えたテキスト'); ?>
</body>

</html>