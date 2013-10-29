<?php
if(isset($_GET['nickname'])){
  require_once('config.php');
 
  $link = mysqli_connect($host, $user, $password, $db_name) or die("Error ".mysqli_error($link));

  $nickname = mysqli_real_escape_string($link, $_GET['nickname']);
  $q = "insert into challengers (id) VALUES ('$nickname');";
  $link->query($q);
  $link->close();
  }
?>
