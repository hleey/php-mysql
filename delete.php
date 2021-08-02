<?php
  $db = new PDO("mysql:host=127.0.0.1;dbname=20210727;charset=utf8","root","");
  $sql = "DELETE FROM board WHERE idx = '{$_GET['idx']}';";
  if ($db->query($sql)) { 
    header('Location:./index.php'); 
  } else {
    print_r($db->errorInfo());   
  }
