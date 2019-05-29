<?php
  echo "hellow world";
  $num = rand(0, 1);
  if ($num == 0) {
    echo "今日の運勢は大吉です。";
  } else {
    echo "今日の運勢は凶です。";
  }

  $str = "鈴木";
  echo '<br>こんにちは{$str}さん¥n';
  echo "<br>こんにちは{$str}さん¥n";

  $animal = array("犬", "猫", "猿", "豚");
  echo "配列の1番目は";
  echo $animal[0];
  ehco "です。<br>";
  echo "配列の3番目は{$animal[2]}です。<br>";
?>
