<?php
  $db = new PDO("mysql:host=127.0.0.1;dbname=20180715;charset=utf8","root","hy9141");
  $rows = $db->query("SELECT * FROM board WHERE idx ='{$_GET['idx']}'")->fetchAll(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>20185014(게시물 작성)</title>
</head>
<body>
  <form action="./update_ok.php?idx=<?php echo $_GET['idx']?>" method="post">
    <fieldset>
      <legend>글작성</legend>
        <ul>
          <li>
            <label>
              제목
              <input type="text" name="suject" value="<?php echo $row->subject?>">
            </label>
          </li>
          <li>
            <label>
              작성자
              <input type="text" name="writer" value="<?php echo $row->writer?>">
            </label>
          </li>
          <li>
            <label>
              내용
              <input type="text" name="content" value="<?php echo $row->content?>">
            </label>
          </li>
        </ul>
        <p>
          <button type="button" onclick="location.href = './list.php'">취소</button>
          <button type="button">완료</button>
        </p>
      </fieldset>
    </form>
</body>
</html>