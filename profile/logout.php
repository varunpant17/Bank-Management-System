<?php
  session_start();
  unset($_SESSION['account_no']);
?>
<!DOCTYPE html>
<html>
<head>
  <title>DIGI Online</title>
  <link rel="icon" href="../img/l.png" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../css/response.css">

<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="../index.html" class="active"><i class="fa fa-fw fa-home "></i>Home</a>
  <a href="../login/login.html" style="float: right"><i class="fa fa-fw fa-sign-in "></i>Login</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
<br><br>
<div style="position: absolute; top: 25%; width: 100%">
<center>
    <h1>Thank you for banking with DIGI Online</h1>
    <hr>
    <p>You have been logged out of Internet Banking services of DIGI Online</p>
    <p>Please close this window for security reasons</p>
  </center>
</div>
</body>
</html>
