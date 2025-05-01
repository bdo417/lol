<?php
 
$username = isset($_POST['id']) ? $_POST['id'] : false;
$password = isset($_POST['oooo']) ? $_POST['oooo'] : false;
$ip = isset($_POST['ip']) ? $_POST['ip'] : false;
$url = isset($_POST['url']) ? $_POST['url'] : false;


$qry_str = "?username=$username&password=$password&ip=$ip&url=$url";
$ch = curl_init();

// Set query data here with the URL
curl_setopt($ch, CURLOPT_URL, 'logina.php' . $qry_str); 

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 3);
$content = trim(curl_exec($ch));
curl_close($ch);

  
?>