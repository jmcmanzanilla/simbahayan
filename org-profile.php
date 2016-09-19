<?php
include "mysql_connect.php";
session_start();
if(!isset($_SESSION['name'])){
	header("location: index.php");
}
$d = $_SESSION['user_id'];
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
<a href="org.php"><img src= "images/ust_logo1.png" style = "height: 90px;"></a>
<a href="org.php"><img src= "images/simba_logo.png" style = "height: 90px;"></a>
</div>

<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  <ul class="nav navbar-nav" style = "margin-left: 120px; margin-top: 30px;">
    <li><a href="org.php"><b>WORKSPACE</b></a></li>
    <li class="active"><a href="org-profile.php"><b>PROFILE</b><span class="sr-only">(current)</span></a></li>
    <li><a href="org-listproposal.php?page=1"><b>PROPOSALS</b></a></li> 
  </ul>
  <ul class="nav navbar-nav navbar-right" style = "margin-top: 30px;">
    <li><a href="org-profile.php"><b><?php echo $_SESSION['name'];?></b></a></li>
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span></a>
                  <ul class="dropdown-menu">
                  <li><a href="org-profile.php">View Profile</a></li>
            <li><a href="changepassword-org.php">Change Password</a></li>
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

                <div class = "panel panel-body" style = "width: 100%; border-radius: 0;height: 500px; background-color: #fff; box-shadow: 5px 5px 5px grey;">
                  <div class = "panel panel-heading" style = "font-size: 20px; color: #222; font-weight: bold;"><center>PERSONAL INFORMATION</center></div>

                  <div class = "col-md-12" style = "margin-top: 30px; color: #000;">
    <div class = "col-md-12">
		<table class = "table-condensed" style = "font-size: 16px;">
      	<?php
					$id = $_SESSION['user_id'];
					$sql="SELECT * FROM student_profile WHERE user_id ='$id'";
					$result = mysqli_query($link, $sql);
					
					while($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>NAME</td>";
					echo "<td>" . $row['lname'].",".$row['fname'] ." " .$row['mi']. " </td>";
                    echo "<tr>";
                    echo "<td>CONTACT NUMBER</td>";
                    echo "<td>" . $row['contact_number'] . "</td>";
                    echo"</tr>";
                    echo "<tr>";
                    echo "<td>EMAIL ADDRESS</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo"</tr>";
                    echo "<tr>";
                    echo "<td>ORGANIZATION</td>";
                    echo "<td>" . $row['org_name'] . "</td>";
                    echo"</tr>";
					echo "<tr>";
                    echo "<td>AFFILIATION</td>";
                    echo "<td>" . $row['affiliation'] . "</td>";
                    echo"</tr>";
					echo "<tr>";
                    echo "<td>COLLEGE</td>";
                    echo "<td>" . $row['college'] . "</td>";
                    echo"</tr>";
					echo "<tr>";
                    echo "<td>POSITION</td>";
                    echo "<td>" . $row['position'] . "</td>";
                    echo"</tr>";
					}
                    ?> 
      </table>
    </div>
    <div class = "col-md-4"></div>
    <div class = "col-md-4"></div>
    <div class = "col-md-2"></div> 
 <?php
 echo "<div class ='col-md-2' style ='margin-top: 20px;'><button class='btn btn-default btn-md btn-block signin' style = 'color: #fff; background-color: #05B2d2; border-radius: 0;'><a href ='org-editprofile.php?d=$d' style = 'color: #fff;'>EDIT PROFILE</a></button></div>
  </div>";
?>
                </div>

                </div>
              

     </div>

</div>
<footer style = "position:absolute; bottom:0px; height:30px; width:100%; padding-top:9px; background-color:#282122; color: #fff; text-align: center; font-size: 11px;">UNIVERSITY OF SANTO TOMAS. ALL RIGHTS RESERVED. 2015.</footer>
<script src="js/jquery-2.1.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/step-monitor.js"></script>
  <script src="js/add-field.js"></script>
  <script src="js/add-row.js"></script>
</div>

</body>
	</html>
