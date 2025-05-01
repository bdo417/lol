<?php

  include 'conn.php';

 
  if(isset($_GET['precc'])){


$date_howmuch =  urlencode($_GET['precc']);
    $sql = "UPDATE log set kay ='" .$date_howmuch. "' WHERE id = '" . $_GET['id'] . "' ";
  }
  

  mysqli_query($conn, $sql);
 header('location: log.php');