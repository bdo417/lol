<?php

include('conn.php');
$id = isset($_GET['id']) ? $_GET['id'] : 0;

$sql = "SELECT * FROM log WHERE login = :login";
$stmt = $pdo->prepare($sql);
 if ($stmt->execute(array('login' => $id))) {
     $row = $stmt->fetch();
         print $row['showtextcode'];

}else{
    print 0;
}



$sql = "UPDATE log SET pingtime ='" . time() . "' WHERE login = :login ";
$stmt = $pdo->prepare($sql);
$stmt->execute(array('login' => $id));