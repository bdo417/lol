<?php
$servername = "5.79.67.193";
$username = "u1626";
$password = "9wGGi8PfFZAt";
$dbname = "persel";

$connect = mysqli_connect($servername, $username, $password, $dbname);;

$pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 
 session_start();
  global $conn;
  $conn = new mysqli($servername, $username, $password, $dbname);
 

 if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
 
?>
