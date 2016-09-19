<?php
include "mysql_connect.php";
session_start();
if(!isset($_SESSION['name'])){
	header("location: index.php");
}
$id = $_SESSION['user_id'];


$sqlselect="SELECT profile FROM login_user where user_id = $id";
$results = mysqli_query($link, $sqlselect);
					
while($row = mysqli_fetch_array($results)) {
	$profile = $row['profile'];
	if ($profile ==0) {
	echo "<script type='text/javascript'>alert('You are a new user. Start by creating your profile!');window.location = 'signatory-newprofile.php';</script>";
	}
	}
$sql = "SELECT position FROM signatory_profile where user_id = $id";
$result = mysqli_query ($link, $sql);
while($row = mysqli_fetch_array($result)) {
	$pos = $row['position'];
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

.home {
  background-color: #fff;
  color: #000;
  border-radius: 0;
  width: 100px;
  height: 100px;

}

.home:hover{
  background-color: #fab303;
  color: #fff;
}

span.text-content {
  background: rgba(0,0,0,0.5);
  color: white;
  cursor: pointer;
  display: table;
  height: 100px;
  left: 0;
  position: absolute;
  top: 0;
  width: 100px;
  margin-left: 15px;
}

span.text-content span {
  display: table-cell;
  text-align: center;
  vertical-align: middle;
}
span.text-content {
  background: rgba(0,0,0,0.5);
  color: white;
  cursor: pointer;
  display: table;
  height: 100px;
  left: 0;
  position: absolute;
  top: 0;
  width: 100px;
  opacity: 0;
  margin-left: 15px;
}

.home:hover span.text-content {
  opacity: 1;
}
span.text-content {
  background: rgba(0,0,0,0.5);
  color: white;
  cursor: pointer;
  display: table;
  height: 100px;
  left: 0;
  position: absolute;
  top: 0;
  width: 100px;
  opacity: 0;
  margin-left: 15px;
  -webkit-transition: opacity 500ms;
  -moz-transition: opacity 500ms;
  -o-transition: opacity 500ms;
  transition: opacity 500ms;
}

</style>

	<body style = "background-color: #d8ced1; font-family: 'RobotoDraft'; height: 100%; font-size: 14px; padding-top: 5%; padding-bottom: 5%;">
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
<a href="signatory.html"><img src= "images/ust_logo1.png" style = "height: 90px;"></a>
<a href="signatory.html"><img src= "images/simba_logo.png" style = "height: 90px;"></a>
</div>

<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  <ul class="nav navbar-nav" style = "margin-left: 120px; margin-top: 30px;">
    <li class="active"><a href="signatory.php"><b>WORKSPACE</b><span class="sr-only">(current)</span></a></li>
    <li><a href="signatory-profile.php"><b>PROFILE</b></a></li>
   
   <li><?php
	if ($pos == "NSTP Moderator") {
              echo '<a href = "manage-order-nstp.php">';
			  }
			  else {
			  echo '<a href = "manage-order-step1.php">';
			  }
			  ?><b>SIGNATORIES</b></a></li> 
			  
	<li><a href="signatory-listproposal.php?page=1"><b>PROPOSALS</b></a></li> 
  </ul>
  <ul class="nav navbar-nav navbar-right" style = "margin-top: 30px;">
    <li><a href="signatory-profile.php"><b><?php echo $_SESSION['name'];?></b></a></li>
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span></a>
                  <ul class="dropdown-menu">
                  <li><a href="signatory-profile.php">View Profile</a></li>
            <li><a href="changepassword-signatory.php">Change Password</a></li>
                <li><a href="logout.php">Sign Out</a></li>
      </ul>
    </li>
  </ul>
</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>
    <div class = "container">
                              <div class = "col-md-12" style = "div-align: center; margin-top: 30px;">

                <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/ust1.png" style = "width: 100%; height: 300px; max-width: 100%; max-height: 100%;" alt="UST SCDO">
    </div>

    <div class="item">
      <img src="images/ust2.png" style = "width: 100%; height: 300px; max-width: 100%; max-height: 100%;" alt="UST SCDO">
    </div>

    <div class="item">
      <img src="images/ust3.png" style = "width: 100%; height: 300px; max-width: 100%; max-height: 100%;" alt="UST SCDO">
    </div>

    <div class="item">
      <img src="images/ust4.jpg" style = "width: 100%; height: 300px; max-width: 100%; max-height: 100%;" alt="UST SCDO">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class = "panel panel-body">
  <div class = "col-md-12">
  <p style = "text-align: center; font-size: 30px;">WELCOME TO THE UST SIMBAHAYAN COMMUNITY DEVELOPMENT OFFICE PROPOSAL TRACKING SYSTEM!</p>
  </div>
<div class = "col-md-12">
          <div class = "col-md-2">
            <div class = "col-md-12">
              
              <a href = "add-user-sig.php" style = "color: #fff; text-decoration: none;"><div class = "home"><span class="glyphicon glyphicon-user" style = "font-size: 30px; margin-left: 35%; margin-top: 30%;" aria-hidden="true"></span><center><p style = "font-size: 11px; color: #000; margin-top: 20px;">ADD USER</p></center><span class="text-content"><span>Add organizations and signatories to the system</span></span></div></a>
            </div>
          </div>
          <div class = "col-md-2">
            <div class = "col-md-12">
              <?php
			  if ($pos == "Budget Officer") {
			  echo '<a href = "approval.php" style = "color: #fff; text-decoration: none;"><div class = "home"><span class="glyphicon glyphicon-folder-open" style = "font-size: 30px; margin-left: 35%; margin-top: 30%;" aria-hidden="true"></span><center><p style = "font-size: 11px; color: #000; margin-top: 20px;">PROPOSALS</p></center><span class="text-content"><span>See list of pending proposals awaiting your approval</span></span></div></a>';
			  }
			  else {
			  echo '<a href = "signatory-listproposal.php?page=1" style = "color: #fff; text-decoration: none;"><div class = "home"><span class="glyphicon glyphicon-folder-open" style = "font-size: 30px; margin-left: 35%; margin-top: 30%;" aria-hidden="true"></span><center><p style = "font-size: 11px; color: #000; margin-top: 20px;">PROPOSALS</p></center><span class="text-content"><span>See list of pending proposals awaiting your approval</span></span></div></a>';
			  }
			  
			  ?>
              
            </div>
          </div>
          <div class = "col-md-2">
            <div class = "col-md-12" tooltip = "PROPOSALS">
              <a href = "reports-sig.php?page=1" style = "color: #fff; text-decoration: none;"><div class = "home"><span class="glyphicon glyphicon-folder-close" style = "font-size: 30px; margin-left: 35%; margin-top: 30%;" aria-hidden="true"></span><center><p style = "font-size: 11px; color: #000; margin-top: 20px;">REPORTS</p></center><span class="text-content"><span>See all approved project proposals</span></span></div></a>
            </div>
          </div>
          <div class = "col-md-2">
            <div class = "col-md-12" tooltip = "NOTIFICATIONS">
<?php
if ($pos == "NSTP Moderator") {
              echo '<a href = "manage-order-nstp.php" style = "color: #fff; text-decoration: none;"><div class = "home"><span class="glyphicon glyphicon-ok" style = "font-size: 30px; margin-left: 35%; margin-top: 30%;" aria-hidden="true"></span><center><p style = "font-size: 11px; color: #000; margin-top: 5px;">MANAGE SIGNATORIES</p></center><span class="text-content"><span>Set the order of signatories for your organization</span></span></div></a>';
			  }
			  else {
			  echo '<a href = "manage-order-step1.php" style = "color: #fff; text-decoration: none;"><div class = "home"><span class="glyphicon glyphicon-ok" style = "font-size: 30px; margin-left: 35%; margin-top: 30%;" aria-hidden="true"></span><center><p style = "font-size: 11px; color: #000; margin-top: 5px;">MANAGE SIGNATORIES</p></center><span class="text-content"><span>Set the order of signatories for your organization</span></span></div></a>';
			  }
			  ?>
			  
            </div>
          </div>
          <div class = "col-md-2">
            <div class = "col-md-12" tooltip = "ANNOUNCEMENTS">
              <a href = "signatory-announcement.php" style = "color: #fff; text-decoration: none;"><div class = "home"><span class="glyphicon glyphicon-bullhorn" style = "font-size: 30px; margin-left: 35%; margin-top: 30%;" aria-hidden="true"></span><center><p style = "font-size: 11px; color: #000; margin-top: 20px;">ANNOUNCEMENTS</p></center><span class="text-content"><span>See official announcements from the UST SCDO</span></span></div></a>
            </div>
          </div>
          <div class = "col-md-2">
            <div class = "col-md-12" tooltip = "RECENT ACTIVITIES">
              <a href = "signatory-log.php?page=1" style = "color: #fff; text-decoration: none;"><div class = "home"><span class="glyphicon glyphicon-list-alt" style = "font-size: 30px; margin-left: 35%; margin-top: 30%;" aria-hidden="true"></span><center><p style = "font-size: 11px; color: #000; margin-top: 20px;">RECENT ACTIVITIES</p></center><span class="text-content"><span>Keep track of your activities within the system</span></span></div></a>
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