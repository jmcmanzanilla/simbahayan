<?php
include "mysql_connect.php";
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
    <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>

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

	<body style = "background-image: url(images/ust.jpg); background-size: extend; background-position: center; font-family: 'RobotoDraft'; font-size: 14px;">

<div class = "container-fluid col-md-12">
<!--login box-->
<div class="container-fluid col-md-4">
</div>

<div class="container-fluid well col-md-4 offset-5" style="background-color: #fff; margin-top: 10%; height: 380px; box-shadow: 5px 5px 5px #999; border-radius: 0 ;">
      <div class="row fixed">
     
	  <h2 class="text-center" style = "font-family: 'Lobster', cursive;">Login</h2>
			<form class="form center-block" action = "login.php" method = "post">
            <div class="form-group">
              <center><input type="text" name="username" class="form-control input-lg" style = "border-radius: 0; width: auto; margin-left: 10px; margin-top: 15px; margin-right: 10px;" placeholder="Username" required/></center>
              <center><input type="password" name="password" class="form-control input-lg password" style = "border-radius: 0; width: auto; margin-left: 10px; margin-top: 15px; margin-right: 10px;" placeholder="Password" required/></center>
			  <div class="text-center"><br><a href="" data-toggle="modal" data-target="#myModal" >Forgot Password?</a></div>
			  <div class ="col-md-3"></div>
              <div class ="col-md-6" style ="margin-top: 20px;"><button class="btn btn-default btn-lg btn-block signin" style = "color: yellow; background-color: black; border-radius: 0;" type = "submit" name = "login_user">Sign In</button></div>
			  <div class ="col-md-3"></div>
              
            </div>
          </form>
	</div>
</div>
<div class = "col-md-4">
</div>

</div>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Account Type</h4>
      </div>
      <div class="modal-body">
        <a href = "uservalidate-org.php">Organization</a>
        <br>
        <a href = "uservalidate-signatory.php">Signatory</a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" style = "color: #fab303;">Close</button>
      </div>
    </div>

  </div>
</div>

	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
	</html>
