<?php
include "mysql_connect.php";
session_start();
if(!isset($_SESSION['name'])){
  header("location: index.php");
}

if (isset($_POST['submitted'])){
	include "mysql_connect.php";
	
	$id = $_SESSION['user_id'];
	
	$password = md5($_POST['password']);
	$newpass = $_POST['newpass'];
	$newpass2 = $_POST['newpass2'];
	
	$querypass = "SELECT password FROM login_user WHERE user_id = $id";
	$resultid = mysqli_query($link, $querypass);
	while ($row = mysqli_fetch_array($resultid)){
			$oldpass = $row['password'];
	}
	
	if ($password == $oldpass){
			if ($newpass == $newpass2){
					$update = "UPDATE login_user SET password = md5('$newpass') WHERE user_id = $id";
					if(!mysqli_query($link, $update)){
		die("<script type='text/javascript'>alert('ERROR CHANGING PASSWORD!'); window.history.go(-1);</script>");
	}

	echo "<script type='text/javascript'>alert('SUCCESSFULLY CHANGED PASSWORD!'); window.location = 'changepassword-signatory.php';</script>";
			}
		
	}
	die("<script type='text/javascript'>alert('PASSWORD DID NOT MATCH!'); window.history.go(-1);</script>");
	
	
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Proposal Tracking System</title>

   	<!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

</head>

<style>
@font-face {
  font-family: 'RobotoDraft';
  font-style: normal;
  font-weight: 400;
  src: local('RobotoDraft'), local('RobotoDraft-Regular'), local('Roboto-Regular'), url('fonts/RobotoDraftRegular.woff2') format('woff2'), url('../fonts/RobotoDraftRegular.woff') format('woff');
}
@font-face {
  font-family: 'RobotoDraft';
  font-style: normal;
  font-weight: 500;
  src: local('RobotoDraft Medium'), local('RobotoDraft-Medium'), local('Roboto-Medium'), url('fonts/RobotoDraftMedium.woff2') format('woff2'), url('../fonts/RobotoDraftMedium.woff') format('woff');
}
@font-face {
  font-family: 'RobotoDraft';
  font-style: normal;
  font-weight: 700;
  src: local('RobotoDraft Bold'), local('RobotoDraft-Bold'), local('Roboto-Bold'), url('fonts/RobotoDraftBold.woff2') format('woff2'), url('../fonts/RobotoDraftBold.woff') format('woff');
}
@font-face {
  font-family: 'RobotoDraft';
  font-style: italic;
  font-weight: 400;
  src: local('RobotoDraft Italic'), local('RobotoDraft-Italic'), local('Roboto-Italic'), url('fonts/RobotoDraftItalic.woff2') format('woff2'), url('../fonts/RobotoDraftItalic.woff') format('woff');
}
</style>

<script>
function passwordConfirm()  
       {  

          var newpass = document.getElementById("newpass").value;
		  var newpass2 = document.getElementById("newpass2").value;
		  var match = document.getElementById("newpass2");
          var message = document.getElementById("confirmMessage");

          var goodColor = "#66cc66";
          var badColor = "#ff6666";



                if (newpass2 == newpass) {
                    message.innerHTML = "Passwords match!"
                    match.style.backgroundColor = goodColor;
                    message.style.color = goodColor;
                    return true;
				}
          else  
          {  
          message.innerHTML = "Password did not match!" 
          match.style.backgroundColor = badColor;
            message.style.color = badColor;
          return false;  
          }  
       } 
</script>

	<body style = "background-color: #d8ced1; font-family: 'RobotoDraft'; height: 100%; color: #222; font-size: 14px; padding-top: 5%; padding-bottom: 5%;">
  <div class = "wrapper">
<nav class="navbar navbar-default navbar-fixed-top">
<div class="container-fluid">
<!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a href="signatory.php"><img src= "images/ust_logo1.png" style = "height: 90px;"></a>
<a href="signatory.php"><img src= "images/simba_logo.png" style = "height: 90px;"></a>
</div>

<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
 <ul class="nav navbar-nav" style = "margin-left: 120px; margin-top: 30px;">
    <li class="active"><a href="admin.php"><b>WORKSPACE</b><span class="sr-only">(current)</span></a></li>
    <li><a href="admin-profile.php"><b>PROFILE</b></a></li>
<li><a href="manage-simbahayan-1.php"><b>MANAGE SIGNATORIES</b></a></li>
  </ul>
  <ul class="nav navbar-nav navbar-right" style = "margin-top: 30px;">
    <li><a href="admin-profile.php"><b><?php echo $_SESSION['name'];?></b></a></li>
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span></a>
                  <ul class="dropdown-menu">
                  <li><a href="admin-profile.php">View Profile</a></li>
                  <li><a href="changepassword-admin.php">Change Password</a></li>
                <li><a href="logout.php">Sign Out</a></li>
      </ul>
    </li>
  </ul>
</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>
    <div class = "container">
               <div class = "col-md-12" style = "div-align: center; margin-top: 30px;">

            <div class = "col-md-12">

                <div class = "panel panel-body" style = "width: 100%; border-radius: 0;height: auto; color: #000; background-color: #fff; box-shadow: 5px 5px 5px grey;">
                  <div class = "panel panel-heading" style = "font-size: 20px; color: #222; font-weight: bold;"><center>CHANGE PASSWORD</center></div>
                  <div class = "col-md-4">
                  </div>
                  <div class = "col-md-4" style = "margin-top: 30px; font-size: 16px;">
		<form class = "form-group" action = "changepassword-admin.php" method = "post" enctype="multipart/form-data">
               <input type="hidden" name="submitted" value="true"/>
			   <label>Old Password</label><br>
               <input type = "password" class = "form-control" name = "password" maxlength = "100" required = "required">
			   <label>New Password</label><br>
			   <input type = "password" class = "form-control" id = "newpass" name = "newpass" onkeyup = "passwordConfirm();" required = "required" maxlength = "100">
			   <label>Confirm New Password</label><br>
			   <input type = "password" class = "form-control" id = "newpass2" onkeyup = "passwordConfirm();" name = "newpass2" maxlength = "100" required = "required">
			   <br><center><span id="confirmMessage" class="confirmMessage"></span></center>
              <div class = "col-md-4"></div>
              <div class = "col-md-4" style = "margin-top: 15px;"><input class="btn btn-default btn-md btn-block signin" style = "color: #fff; background-color: #23cf5f;" type = "submit" value = "Change"></div>
               <div class = "col-md-4"></div>
            </form>   
                  
                  </div>
                  <div class = "col-md-4">
                  </div>

                </div>

                </div>
              

     </div>

</div>
<footer style = "position:fixed; bottom:0px; height:30px; width:100%; padding-top:9px; background-color:#282122; color: #fff; text-align: center; font-size: 11px;">UNIVERSITY OF SANTO TOMAS. ALL RIGHTS RESERVED. 2015.</footer>
<script src="js/jquery-2.1.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/step-monitor.js"></script>
  <script src="js/add-field.js"></script>
  <script src="js/add-row.js"></script>
</div>

</body>
	</html>
