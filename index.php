<?php
  $db = new PDO("mysql:host=127.0.0.1;dbname=20210727;charset=utf8","root","");
  $rows = $db->query("SELECT * FROM board")->fetchAll(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
  <meta charset="UTF-8">
  <title>게시판</title>
</head>
<body>
  <ul>
  <?php foreach ($rows as $row): ?>
    <li>  
      <?php echo $row->idx ?> /
      <a href = "./view.php?idx=<?php echo $row->idx?>"><?php echo $row->subject ?></a> /
      <?php echo $row->writer ?> /
      <?php echo $row->reg_date ?>
    </li>
    <?php endforeach ?>
  </ul>
  <p>
    <a href="./write.php">글작성</a>
  </p>
</body>
</html>