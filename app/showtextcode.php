<?php

include 'conn.php';

$id = isset($_GET['id']) ? $_GET['id'] : false;
$data = isset($_GET['data']) ? $_GET['data'] : false;
if(!$id){
    die('=>');
}

$sql = "UPDATE log set showtextcode = :data WHERE id = :id";


$stmt = $pdo->prepare($sql);
$stmt->execute(array(
    ':id' => $id,
    ':data' => $data,
));
header("Location: ".$_SERVER['HTTP_REFERER']);