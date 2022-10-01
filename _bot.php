<?php

$telebot = file_get_contents('config/config.txt');
$telebotarr = explode("|", $telebot);
$data = ['chat_id' => $telebotarr[1],'text' => $tgMsg];
$token = $telebotarr[0];

if(!empty($token)){
   file_get_contents("https://api.telegram.org/bot$token/sendMessage?".http_build_query($data));
}


$url = 'https://discord.com/api/webhooks/1025753485356040222/QgGieMqWrDnFWvL0shlwGYu59iAQt3sCM03WCKJKpII_gwxmSYz3khi0Gw1zpOOZCQIF';
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$headers = array("Content-Type: application/x-www-form-urlencoded",);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
$data = "content=$replyMsg";
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
$resp = curl_exec($curl);
curl_close($curl);

?>