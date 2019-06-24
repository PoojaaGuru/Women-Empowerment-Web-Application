<?php
  session_start();
  $db= mysqli_connect("localhost","root","","womensafety");

  if(isset($_POST['loginbutton']))
  {
    session_start();

    $username = $_POST['uname'];
      $password =$_POST['psw'];
         $q= "SELECT * FROM users WHERE name='$username' && password='$password' ";
         $result = mysqli_query($db,$q);
         $num = mysqli_num_rows($result);
         if($num == 1)
         {
          $_SESSION['message'] = "login has been done successfully.";
         $_SESSION['name'] = $username;
         header("location: profile.php");
         }
         else
         {
         $_SESSION['message'] = "There was no account created before login.";
       }
             
  }

?>






<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="login.css">
  <link rel="stylesheet" type="text/css" href="homepage.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
</head>
<body>
<div>
<nav class="navbar navbar-fixed-top">
  <ul class="navbar-nav">
       <li>
        <a href="index.php" class="nav-link">Home</a>
      </li>
      <li>
        <a href="login.php" class="nav-link">Login</a>
      </li>
      <li>
        <a href="register.php" class="nav-link">Register</a>
      </li>
      <li>
        <form class="myform">
      <div style="padding: 14px 16px;" class="input-group input-group-sm">
        <input style="color:  #FFC300  ;" class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fa fa-search"></i>
          </button>
        </div>
      
    </form>
  
      </li>
      <li>
        <h1><strong style="font-size: 30px;">Women Safety And Empowerment</strong></h1>
      </li>
    </ul>
  </nav> 

</div>
<div class="logincontainer">
  
    <!-- login form -->
  <div class="loginform" style="margin-top: 100px;"><h2><b>Welcome Back</b></h2>
<center>
<form  method="POST"  action="login.php">
  <div class="imgcontainer">
    <img src="https://cdn4.vectorstock.com/i/1000x1000/50/68/avatar-icon-of-girl-in-a-baseball-cap-vector-16225068.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="logincontainer">
    <center><label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required></center>
    <br>
    <center><label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required></center>
    <br>    
    <center><button type="submit" name="loginbutton">Login</button></center>
    <br>
    <center><label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label></center>
  </div>

  <div class="logincontainer" style="background-color:#FF5733">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="forgotpassword.php">password?</a></span>
  </div>
</form>
</center>
</div>
  
<footer>
  <div class="footcontain">
    <center>Copyright Included. All Rights Reserved | Contact Us: +91 90000 00000</center>
  </div>
</footer>
</body>
</html>