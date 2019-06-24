<?php
  session_start();
  $db= mysqli_connect("localhost","root","","womensafety");

  if(isset($_POST['registerbutton']))
  {
    session_start();

    $username = $_POST['name'];
     $email = $_POST['email'];
      $password1 =$_POST['psw'];
       $password2 = $_POST['psw-repeat'];


       if($password1 == $password2){
         $sql = "INSERT INTO users(name, email, password) VALUES('$username', '$email', '$password1')";
         $q= "SELECT * FROM users WHERE name='$username' && password='$password1' ";
         $result = mysqli_query($db,$q);
         $num = mysqli_num_rows($result);
         if($num == 1)
         {
          echo "duplicate data.";
         }
         else
         {
         mysqli_query($db, $sql);
         $_SESSION['message'] = "registration has been done successfully.";
         $_SESSION['name'] = $username;
         echo '<script type="text/javascript">
          sweetalertsuccess();
        </script>'; 
         header("location: settings.php");
       }
       }
       else{
         $_SESSION['message'] = "The passwords did not match.";
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
  <script type="text/javascript">

function sweetalertsuccess(){
        swal({ 
              title: "Yay!!",
              text: "Registration Successful. :)",
              type: "success" 
        },
             function(){
                //event to perform on click of ok button of sweetalert
        });
}
</script> 
 
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
  <div class="loginform" style="margin-top: 100px;"><h2><b>New Here</b></h2>
<center>
<form   method="POST" action="register.php">
  <div class="imgcontainer">
    <img src="https://cdn4.vectorstock.com/i/1000x1000/50/68/avatar-icon-of-girl-in-a-baseball-cap-vector-16225068.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="logincontainer">
    <h1 style="color: #FF5733;">Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    
    <label for="email"><b>Email </b></label><br>
    <center>
    <input type="text" placeholder="Enter Email" name="email" required>
    </center>

    <label for="name"><b>Username </b></label><br>
    <center>
    <input type="text" placeholder="Enter Username" name="name" required>
    </center>
    
    <label for="psw"><b>Password </b></label><br>
    <center>
    <input type="password" placeholder="Enter Password" name="psw" required>
    </center>
    
    <label for="psw-repeat"><b>Repeat Password </b></label><br>
    <center>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
    </center>
    <hr>
    <p>By creating an account you agree to our <a href="terms.php">Terms & Privacy</a>.</p>

    <button type="submit" name="registerbutton" class="registerbtn">Register</button>
  </div>
  
  <div class="logincontainer">
    <p>Already have an account? <a href="login.php">Sign in</a>.</p>
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