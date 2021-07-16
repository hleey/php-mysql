<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>20185014(게시물 작성)</title>
</head>
<body>
  <form action="./write_ok.php" method="post">
    <fieldset>
      <legend>글작성</legend>
        <ul>
          <li>
            <label>
              제목
              <input type="text" name="suject"/>
            </label>
          </li>
          <li>
            <label>
              작성자
            </label>
          </li>
          <li>
            <label>
              내용
              <input type="text" name="content" />
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