<form action="regex1.php" method="post">
整数を入力してください
  <input type="text" name="num">
  <input type="submit">
</form>
<?php 
  if (isset($_POST['num'])) {
    if (preg_match('/[^-\d]/', $_POST['num'])) {
      echo "整数ではありません。";
    } else {
      echo "整数です。";
    }
  }
?>