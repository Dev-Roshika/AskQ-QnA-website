<?php 

session_start();

if (isset($_SESSION['login_email'])) {
    header("Location: html/home.php");
}

?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>AskQ | Login</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" href="img/AskQ-Logo.png" size = "128x128">

</head>
<body>

<!--Header-->
<div class="header">
  <img src="img/AskQ-Logo.png" alt="logo" height="70px">
  <div class="header-right">
      <button type="button" class="btn btn-outline-info" id = "Login_Button">Log in</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="html/register.php"><button type="button" class="btn btn-outline-info" id = "Register_Button">Register</button></a>
  </div>
</div>
<!--Header end-->

<!-- partial:index.partial.html -->
<div class="logo text-center">
  <!--<h1>Logo</h1>-->
</div>
<div class="wrapper">
  <div class="inner-warpper text-center">
    <h2 class="title">Welcome Back!</h2>
    <p>Login to manage your account.</p>
    <form action="php/login.php" method='post' id="formvalidate">
      <div class="input-group">
        <label class="palceholder" for="userName">User Name</label>
        <input class="form-control" name="email" id="userName" type="text" placeholder="" />
        <span class="lighting"></span>
      </div>
      <div class="input-group">
        <label class="palceholder" for="userPassword">Password</label>
        <input class="form-control" name="password" id="userPassword" type="password" placeholder="" />
        <span class="lighting"></span>
      </div>

      <button type="submit" name='sign_in' id="login">Login</button>
      <div class="clearfix supporter">
        <div class="pull-left remember-me">
          <input id="rememberMe" type="checkbox">
          <label for="rememberMe">Remember Me</label>
        </div>
        <a class="forgot pull-right" href="#">Forgot Password?</a>
      </div>
    </form>
  </div>
  <div class="signup-wrapper text-center">
    <a href="html/register.php">Don't have an accout? <span class="text-primary">Create One</span></a>
  </div>
</div>

<!-- you don't need that :) 
<div class="direction">
  Type something in input and click submit to see the effect
</div>
-->

<!-- partial -->
<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js'></script>
<script src="js/script.js"></script>
</body>
</html>
