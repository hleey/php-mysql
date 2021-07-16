<?php
  $db = new PDO("mysql:host=127.0.0.1;dbname=20180715;charset=utf8","root","hy9141");
  $sql = "DELETE FROM board WHERE idx = '{$_GET['idx']}';";
  if ($db->query($sql)) { 
    header('Location:./index.php'); 
  } else {
    print_r($db->errorInfo());   
  }
