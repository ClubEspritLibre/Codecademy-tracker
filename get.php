<?php
  require_once('config.php'); 
  $link = mysqli_connect($host, $user, $password, $db_name) or die("Error ".mysqli_error($link));

  $q = "select id from challengers";
  $res = $link->query($q);
  while($row = mysqli_fetch_array($res)){
    echo "<div class='challenger'>".$row['id']."</div>";
  }
  $link->close();
?>
