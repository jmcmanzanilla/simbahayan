<?php
session_start();
if(!isset($_SESSION['name'])){
	header("location: index.php");
}
include "mysql_connect.php";

$id = $_SESSION['user_id'];

if(isset($_POST['submitted'])){
	$num = $_POST['num'];

for ($x = 0; $x <= $num; $x++){
	
	$user = $_POST['user_id'][$x];
	$college = $_POST['college'][$x];
	
	$sqlinsert = "UPDATE login_user SET college = '$college', password = md5('$college') WHERE user_id = '$user'";
	
	if(!mysqli_query($link, $sqlinsert)){
		die("FAILED SUBMISSION");
	}
	echo "<script type='text/javascript'>alert('SUCCESSFULLY ADDED ACCOUNT'); window.location = 'add-user1.php';</script>";
}
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
<a href="admin.php"><img src= "images/ust_logo1.png" style = "height: 90px;"></a>
<a href="admin.php"><img src= "images/simba_logo.png" style = "height: 90px;"></a>
</div>

<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  <ul class="nav navbar-nav" style = "margin-left: 120px; margin-top: 30px;">
    <li class="active"><a href="admin.php"><b>WORKSPACE</b><span class="sr-only">(current)</span></a></li>
    <li><a href="admin-profile.php"><b>PROFILE</b></a></li>
    <li><a href="manage-order-step1.php"><b>MANAGE SIGNATORIES</b></a></li> 
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

                <div class = "panel panel-body" style = "overflow:auto; width: 100%; border-radius: 0;height: auto; background-color: #fff; box-shadow: 5px 5px 5px grey;">
                  <div class = "panel panel-heading" style = "font-size: 20px; color: #222; font-weight: bold;"><center>MANAGE SIGNATORIES</center></div>

                  <div class = "col-md-12" style = "margin-top: 0px; color: #000; height: auto;">
                
                <form role="form" class="col-md-12" action = "add-user2.php" method = "post" enctype="multipart/form-data">
                <input type="hidden" name="submitted" value="true"/>
				
        <h3 style="margin-top:0px;">EDIT SIGNATORY ORDER </h3><br>
		
		<?php
				$sql="SELECT * FROM login_user WHERE reference = $id AND college = ' '";
				$results = mysqli_query($link,$sql);
				$num = mysqli_num_rows($results);
				echo '<input type="hidden" name="num" value="'.$num.'"/>';
				for ($x=0; $x <= $num; $x++){

				while($row = mysqli_fetch_array($results)) {
					$user_id[$x] = $row['user_id'];
					$name = $row['name'];
				echo '<input type="hidden" name="user_id[]" value="'.$user_id[$x].'"/>';	
				echo '<div class="form-group col-md-12">';
                echo '<div class="form-group col-md-2">
                    <label class="control-label">Username: </label>
					<h1 class="form-control">'.$user_id[$x].'</h1>
					</div>';
				echo '<div class="form-group col-md-5">
                    <label class="control-label">Name: </label>
					<h1 class="form-control">'.$name.' </h1>
					</div>';
					
				echo '<div class="form-group col-md-5">
						<label class="control-label">College: </label>';
						$query = mysqli_query($link, "SELECT * from college_list");
						echo '<select  name="college[]" class="form-control"  style = "margin-top: 20px;">';
						echo '<option value=""> </option>';
						while ($row = mysqli_fetch_array($query)) {
							echo '<option value="'.$row['college_code'].'">'.$row['college_name'].'</option>';
						}
						echo '</select> </div>';
                echo '</div>';
				}
				echo '</div>';
				
				}
            	
		?>		
                 <div class="form-group" style="text-align:center">
				 <input style = "margin-top: 0px; color: #fff; background-color: #05B2d2;" type="reset" class="btn btn-default btn-lg"/>
				 <input style = "margin-top: 0px; color: #fff; background-color: #23cf5f;" type="submit" value="Submit" class="btn btn-default btn-lg"/>
                 </div>
        
</form>
        

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
