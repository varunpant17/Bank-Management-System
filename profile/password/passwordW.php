<?php
session_start();
$account_no = $_SESSION['account_no'];
$con = mysqli_connect("localhost","root","","bank");
if($_SERVER["REQUEST_METHOD"] == "POST") {
  $old_password = $_POST['old_password'];
  $new_password = $_POST['new_password'];
  $result = mysqli_query($con, "SELECT * FROM login WHERE account_no = '$account_no'");
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  $password = $row['pwd'];
  if($password == $old_password) {
    $c = mysqli_query($con, "update login set pwd = '$new_password' where account_no = '$account_no';");
    header("refresh:0;url=success.html");
  }
  else {
    header("refresh:0;url=passwordW.php");
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>DIGI Online</title>
  <link rel="icon" href="../../img/l.png" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../../css/response.css">
<link rel="stylesheet" href="../../css/style.css">
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
  <a href="../dashboard.php"><i class="fa fa-fw fa-calculator "></i>Dashboard</a>
  <a href="../profile.php" class="active"><i class="fa fa-fw fa-id-card-o "></i>Profile</a>
  <a href="../transfer.php"><i class="fa fa-fw fa-cogs "></i>Transfer Money</a>
  <a href="../transactions.php"><i class="fa fa-fw fa-file-text "></i>Transactions</a>
  <a href="../limit.php"><i class="fa fa-fw fa-sliders "></i>Set Limit</a>
  <a href="../logout.php" style="float: right"><i class="fa fa-fw fa-sign-out "></i>Logout</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
<br><br>
<div align="center" style="background-color: #0076f4; height: 70px; width: 100%; color: white; position: absolute; top: 13%;"><h1>Change Password</h1></div>
<br>
  <div><p align="center" style="color: red  position: absolute; top: 25%; left: 43%">Old Password does not match with the Stored Password</p></div>
<div style="position: absolute; top: 37%; width: 100%">
<center>
  <form action="" method="POST">
    <table width="40%">
      <tr>
        <td>
          <input type="password" name="old_password" class="question" id="old_password" required autocomplete="off" />
          <label for="old_password"><span>Old Password</span></label>
        </td>
      </tr>
    </table>
    <table width="40%">
      <tr>
        <td>
          <input type="password" name="new_password" class="question" id="new_password" required autocomplete="off" />
          <label for="new_password"><span>New Password</span></label>
        </td>
      </tr>
    </table>
    <table width="40%">
      <tr>
        <td>
          <input type="password" name="new_password_confirmation" class="question" id="new_password_confirmation" required autocomplete="off" />
          <label for="new_password_confirmation"><span>Confirm Password</span></label>
        </td>
      </tr>
    </table>
    <br>
    <table width="80%">
      <tr>
        <td align="right"><input type="submit" name="submit" value="CHANGE PASSWORD" style="height: 40px; width: 250px; font-size: 20px; color: white; background-color: #0076f4"></td>
      </tr>
    </table>
  </form>
</center>
</div>
</body>
</html>
