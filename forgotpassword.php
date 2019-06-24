<?php
  session_start();
  $db= mysqli_connect("localhost","root","","womensafety");

 $q= "SELECT * FROM security WHERE securityid=1 ";
         $result = mysqli_query($db,$q);
         while ($question = $result->fetch_assoc()) {
                    $qtn= $question['question'];
         }
         

         if(isset($_POST['securitybutton']))
        {
          session_start();
          $answer = $_POST['ans'];
          $sql= "SELECT * FROM security WHERE question='$qtn' && answer='$answer' ";
          $query = mysqli_query($db,$sql);
          $num = mysqli_num_rows($query);
         if($num == 1)
         {

          $email = $_POST['email'];
          $password1 =$_POST['psw'];
          $password2 = $_POST['psw-repeat'];


        if($password1 == $password2){
         $sqlquery = "UPDATE users SET password = '$password1' WHERE email = '$email'";
         mysqli_query($db,$sqlquery);
         $_SESSION['message'] = "password has been changed successfully.";
         header("location: profile.php");
         }
         else
         {
         $_SESSION['message'] = "Couldn't change password.";
       }
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
  
    <!-- registration form -->
  <div class="loginform" style="margin-top: 100px;"><h2 style="text-align: left;"><b>Forgot your password? </b></h2>
<center>
<form  action="forgotpassword.php" method="POST">
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

    <label for="verify"><b><?php echo $qtn ?></b></label><br>
    <center>
    <input type="text" placeholder="Enter your answer" name="ans" required>

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
    <button type="submit"  name="securitybutton" class="resetpwdbtn">Reset Password</button>
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