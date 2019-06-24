

<?php
  session_start();
  $db= mysqli_connect("localhost","root","","womensafety");

  if(isset($_POST['securitybutton']))
  {
    session_start();

    $Question = $_POST['Question'];
     $Answer = $_POST['Answer'];
         $sql = "UPDATE security SET question = '$Question', answer = '$Answer' WHERE securityid = 1";

         mysqli_query($db, $sql);
         $_SESSION['message'] = "Security Question updated.";
         header("location: settings.php");
    }

     if(isset($_POST['pswbutton']))
        {
          session_start();
          

          $email = $_POST['email'];
          $password1 =$_POST['psw'];
          $password2 = $_POST['psw-repeat'];


        if($password1 == $password2){
         $sqlquery = "UPDATE users SET password = '$password1' WHERE email = '$email'";
         mysqli_query($db,$sqlquery);
         $_SESSION['message'] = "password has been changed successfully.";
         header("location: settings.php");
         }
         else
         {
         $_SESSION['message'] = "Couldn't change password.";
       }
     }

?>

<!DOCTYPE html>
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
        <a href="signout.php" class="nav-link">Sign Out</a>
      </li>
        <li>
        <a href="profile.php" class="nav-link">My Profile</a>
      </li>
       <li>
        <a href="settings.php" class="nav-link">Settings</a>
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
<div class="row">
<div class="col-sm-6" style="margin-top: 100px;">
  <div class="loginform" ><h2 style="text-align: left;"><b>Change Password</b></h2>
<center>
  <form  action="settings.php" method="POST">
  <div class="imgcontainer">
    <img src="https://cdn4.vectorstock.com/i/1000x1000/50/68/avatar-icon-of-girl-in-a-baseball-cap-vector-16225068.jpg" alt="Avatar" class="avatar">
  </div>
<div class="logincontainer">

    <h1 style="color: #FF5733;">Reset Password</h1>
    <p>Don't worry! Please fill in this form to reset your password.</p>
    <hr>
    
    <label for="email"><b>Email </b></label><br>
    <center>
    <input type="text" placeholder="Enter Email" name="email" required>
    </center>

    <label for="psw"><b>New Password </b></label><br>
    <center>
    <input type="password" placeholder="Enter New Password" name="psw" required>
    </center>
    
    <label for="psw-repeat"><b>Repeat Password </b></label><br>
    <center>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
    </center>
    <hr>
    <button type="submit"  name="pswbutton" class="resetpwdbtn">Reset Password</button>
  </div>
</form>
</center>
</div>
</div>
<div class="col-sm-6" style="margin-top: 85px;">
  <div class="logincontainer"> 
  <div class="loginform" ><h2 style="text-align: left;"><b>Security Settings</b></h2>
<center>
<form  method="POST"  action="settings.php">
  <div class="imgcontainer">
    <img src="https://cdn4.vectorstock.com/i/1000x1000/50/68/avatar-icon-of-girl-in-a-baseball-cap-vector-16225068.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="logincontainer">
    <h1 style="color: #FF5733;">Authentication</h1>
    <p>Please set the following security information.</p>
    <hr>
    <label for="question"><b>Security Question:</b></label><br>
      <center>
    <input type="text" placeholder="Enter your Question here" name="Question" required></center>
    <hr>
    <br>
    <label for="answer"><b>Security Answer:</b></label><br>
    <center><input type="password" placeholder="Enter your Answer here" name="Answer" required></center>
    <hr>
    <br>   
    <center><button type="submit" name="securitybutton">Save</button></center>
    <br> 
    </div>
  </form>
</center>
</div>
  </div>
</div>

<footer>
  <div class="footcontain">
    <center>Copyright Included. All Rights Reserved | Contact Us: +91 90000 00000</center>
  </div>
</footer>
</body>
</html>



