

<?php
  session_start();
  $db= mysqli_connect("localhost","root","","womensafety");

  if(isset($_POST['complaintbtn']))
  {
    session_start();

$complaint_name = $_POST['name'];
$Fathersname = $_POST['Father/Husband_name'];
$Phone_number = $_POST['Phone_number'];
$email_id = $_POST['email'];
$age = $_POST['Age'];
$address = $_POST['Address'];   
$date_sub = $_POST['Date_sub'];
$police = $_POST['Police'];
$problem = $_POST['Problem'];
         $sql = "INSERT INTO complaints(Complaint_name, Fathername, Phonenumber, email, Age, Address, Date_sub, Police, Problem) VALUES('$complaint_name', '$Fathersname', '$Phone_number', '$email_id', '$age', '$address', '$date_sub', '$police', '$problem')";
         
         mysqli_query($db, $sql);
         $_SESSION['message'] = "Complaint stored in DB successfully";
 
         header("location: profile.php");
       }
       
       else{
         $_SESSION['message'] = "Complaint not stored!";
       }
  

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="homepage.css">
  <title>Complaint form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link rel="stylesheet" href="form.css" >
        <!--<script src="form.js"></script>-->

<style>

body {
  background: #C70039;
  font-family: Garamond Header;
}
div.complaint{
    width: 100%;
    height: 90%;
    margin: auto;
    overflow: hidden;
    padding: auto;
    background-size: cover;
    color: #FF5733;
}
</style>
</head>
<body>
<div>
<nav class="navbar navbar-fixed-top">
  <ul class="navbar-nav">
       <li>
        <a href="index.php" class="nav-link">Sign Out</a>
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



<div class = "complaint">
	<h1 style="color: #FF5733;
  font-size: 50px;
  font-weight: 600;
  text-align: center;
  margin-top : 140px;
  font: Garamond;">COMPLAINT FORM</h1>

          <!--onsubmit="window.location.href = 'profile.php'" -->
            <div id="form-main">
                <div id="form-div">
                    <form action = "final_complaint.php"  method = "POST" class="montform" id="reused_form" >
                        <p class="name">
                            <input name="name" type="text" class="feedback-input" required placeholder="Name" id="name" />
                        </p>
                        <p class="name">
                            <input name="Father/Husband_name" type="text" class="feedback-input" required placeholder="Father/Husband_Name" id="name" />
                        </p>
                        <p class="name">
                            <input name="Phone_number" type="number" class="feedback-input" required placeholder="Phone_Number" id="name" />
                        </p>
                        <p class="email">
                            <input name="email" type="email" required class="feedback-input" id="email" placeholder="Email" />
                        </p>
                        <p class="name">
                            <input name="Age" type="number" class="feedback-input" required placeholder="Age" id="name" />
                        </p>
                        <p class="text">
                            <textarea name="Address" class="feedback-input" id="comment" placeholder="Address"></textarea>
                        </p>
                        <p class="name">
                        <input name = "Date_sub" type="text" class="form-textbox validate[limitDate, validateLiteDate]" id="lite_mode_19" size="12" data-maxlength="12" data-age="" value="" data-format="mmddyyyy" data-seperator="-" placeholder="Date in mm-dd-yyyy" date-val="1537978576998">
                        </p>
                        <p class="text">
                            <textarea name="Police" class="feedback-input" id="comment" placeholder="Police station under control"></textarea>
                        </p>
                        
                        <p class="text">
                            <textarea name="Problem" class="feedback-input" id="comment" placeholder="Problem faced & Incident details(brief)"></textarea>
                        </p>
                        <p style="text-align: center; font-size: 25px;"><strong>!Thank you for opening up!</strong><br>
                            <strong>!**Spread Girl Power**!</strong>
                        </p>
                        <div class="submit">
                           <button type="submit" class="button-blue" name = "complaintbtn">SUBMIT</button>
                            <div class="ease"></div>
                        
                        </div>
                    </form>
                    <!--<div id="error_message" style="width:100%; height:100%; display:none; ">
                        <h4>
                            Error
                        </h4>
                        Sorry there was an error sending your form. 
                    </div>
                    <div id="success_message" style="width:100%; height:100%; display:none; "> <h2>Success! Your Message was Sent Successfully.</h2> </div>
                </div>-->
            </div>
          </div>
        






</body>
</html>