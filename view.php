<?php
  $db = new PDO("mysql:host=127.0.0.1;dbname=20180715;charset=utf8","root","hy9141");
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
    <?php echo $row->writer ?>
    <a href="./view.php?idx=<?php echo $row->idx?>"><?php echo $row->subject ?></a>
    <?php echo $row->reg_date ?>
  </ul>
  <p>
    <a href="./update.php?idx=<?php echo $_GET['idx']?>">글수정</a>
    <a href="./delete.php?idx=<?php echo $_GET['idx']?>">글삭제</a>
    <a href="./index.php">글작성</a>
  </p>
</body>
</html>  