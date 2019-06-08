<?php
  $d1 = date('Y/m/d H:i:s');
  $d2 = date('Y年m月d日 H時i分s秒');
  echo "現在時刻は　$d1 です。<br>";
  echo "現在時刻は $d2 です。";

  $weeks = array('日','月','火','水','木','金','土');
  $now = time();
  $y = date('Y', $now);
  $m = date('n', $now);
  $last = date('t', $now);
  echo "<h1>{$y}年{$m}月のカレンダー</h1>";
  for ($d = 1; $d <= $last; $d++) {
      $t = mktime(0, 0, 0, $m, $d, $y);
      $w = date('w', $t);
      echo "{$d}日({$weeks[$w]})";
  }
?>