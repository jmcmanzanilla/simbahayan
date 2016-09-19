<?php
include "mysql_connect.php";
session_start();
if(!isset($_SESSION['name'])){
	header("location: index.php");
}

	if(isset($_POST['submitted'])){
    
	$subject = $_POST['subject'];
   	$announcement= $_POST['announcement'];
	$sender = $_SESSION['name'];
	
	$sqlinsert = "INSERT INTO announcement (date, sender, subject, announcement) VALUES (now(), '$sender', '$subject', '$announcement')";


	if(!mysqli_query($link, $sqlinsert)){
		die("ERROR ADDING NEW COMPANY");
	}

	echo "<script type='text/javascript'>alert('SUCCESSFULLY ADDED NEW ANNOUNCEMENT!'); window.location = 'e-announcement.php?announcement=$announcement&&subject=$subject';</script>";
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
<a href="admin.html"><img src= "images/ust_logo1.png" style = "height: 90px;"></a>
<a href="admin.html"><img src= "images/simba_logo.png" style = "height: 90px;"></a>
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

                <div class = "panel panel-body" style = "width: 100%; border-radius: 0;height: 500px; background-color: #fff; box-shadow: 5px 5px 5px grey;">
                  <div class = "panel panel-heading" style = "font-size: 20px; color: #222; font-weight: bold;"><center>ANNOUNCEMENTS</center></div>

                  <div class = "col-md-12" style = "margin-top: 0px; color: #000;">
                
                <form role="form" class="col-md-5" action = "add-announcement.php" method = "post" enctype="multipart/form-data">
                <input type="hidden" name="submitted" value="true"/>
        <h3 style="margin-top:0px;">ADD ANNOUNCEMENT </h3><br>
                <div class="form-group col-md-12">
                    <label class="control-label">Subject: </label>
                    <input maxlength="100" name = "subject" type="text" required="required" class="form-control" />
                </div>
            
                <div class="form-group col-md-12">
                    <label class="control-label">Announcement: </label>
                    <textarea class="form-control" rows="5" name="announcement"></textarea>
                </div>
         <div class = "col-md-12">
                 <div class="form-group" style="text-align:right">
         <input style = "margin-top: 10px; color: #fff; background-color: #05B2d2; border-radius: 0;" type="reset" class="btn btn-default btn-lg"/>
         <input style = "margin-top: 10px; color: #fff; background-color: #23cf5f; border-radius: 0;" type="submit" value="Submit" class="btn btn-default btn-lg"/>
       </div>
                 </div>
        
</form>
        <div class="col-md-7" style="margin-top:10px; overflow-y: scroll; height: 350px;">
        <table class="table table-hover">
        <thead>
          <tr>
            <th>Date</th>
            <th>Subject</th>
            <th>Announcement</th>
          </tr>
        </thead>
        <tbody>
		  <?php
		$sql="SELECT * FROM announcement ORDER BY date desc";
		$result = mysqli_query($link, $sql);
					
		while($row = mysqli_fetch_array($result)) {
		echo "<tr>";
		echo "<td>".$row['date']."</td>";
		echo "<td>".$row['subject']."</td>";
		echo "<td>".$row['announcement']."</td>";
		echo "</tr>";
		}
		  ?>
        </tbody>
        </table>
        </div>

                </div>

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
