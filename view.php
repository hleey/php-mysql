<?php
  $db = new PDO("mysql:host=127.0.0.1;dbname=20210727;charset=utf8","root","");
  $row = $db->query("SELECT * FROM board WHERE idx = '{$_GET['idx']}'")->fetch(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>게시물 조회</title>
</head> 
<body>
  <ul>
      <?php echo $row->idx ?>
      <?php echo $row->subject ?>
      <?php echo $row->writer?><br><br>
      <?php echo $row->content ?><br><br>
      <?php echo $row->reg_date ?>
  </ul>
  <p>
    <a href="./index.php">글목록</a>
    <a href="./update.php?idx=<?php echo $_GET['idx']?>">글수정</a>
    <a href="./delete.php?idx=<?php echo $_GET['idx']?>">글삭제</a>
  </p>
</body>
</html>  