<?php
  $db = new PDO("mysql:host=127.0.0.1;dbname=20180715;charset=utf8","root","hy9141");
  $sql = "
    INSERT INTO board SET
    subject = '{$_POST['subject']}',  
    writer = '{$_POST['writer']}',    
    content = '{$_POST['content']}', 
    reg_date = now();                 
  ";
  if ($db->query($sql)) { 
    header('Location:./index.php'); 
  } else {
    print_r($db->errorInfo());    
  }