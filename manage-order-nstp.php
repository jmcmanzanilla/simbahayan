<?php
session_start();
if(!isset($_SESSION['name'])){
	header("location: index.php");
}
include "mysql_connect.php";

//$d=$_GET['d'];
$id = $_SESSION['user_id'];
if(isset($_POST['submitted'])){
	
	for ($x=0; $x <= 1; $x++) {

	$order_number = $_POST["order_number"][$x];
	$signatory_num = $_POST["signatory"][$x];
	//$org_num = $d;
	
	$sql="SELECT name FROM login_user WHERE user_id=".$signatory_num."";
				$result = mysqli_query($link,$sql);
				while($row = mysqli_fetch_array($result)) {
					$signatory_name=$row['name'];
				}
	$query = "SELECT * FROM order_signatory WHERE nstp = 1";  
        $result = mysqli_query($link,$query);
        $test = mysqli_num_rows($result);
        
        if ($test >= 2) {

            die("<script type='text/javascript'>alert('Organization already has existing list of signatories.');window.history.go(-1);</script>");
    } 
	$sqlinsert = "INSERT INTO order_signatory (order_number, signatory_num, signatory_name, reference, simbahayan, univ_wide, standard, nstp) VALUES ('$order_number','$signatory_num','$signatory_name','$id', '0', '0','1','1')";
	
	if(!mysqli_query($link, $sqlinsert)){
		die("FAILED SUBMISSION");
	}
	echo "<script type='text/javascript'>alert('SUCCESSFULLY ADDED ACCOUNT'); window.location = 'manage-order-nstp.php';</script>";
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
<a href="admin.html"><img src= "images/ust_logo1.png" style = "height: 90px;"></a>
<a href="admin.html"><img src= "images/simba_logo.png" style = "height: 90px;"></a>
</div>

<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  <ul class="nav navbar-nav" style = "margin-left: 120px; margin-top: 30px;">
    <li><a href="signatory.php"><b>WORKSPACE</b><span class="sr-only">(current)</span></a></li>
    <li><a href="signatory-profile.php"><b>PROFILE</b></a></li>
    <li class="active"><a href="manage-order-step1.php"><b>SIGNATORIES</b></a></li> 
	<li><a href="signatory-listproposal.php"><b>PROPOSALS</b></a></li> 
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

            <div class = "col-md-12">

                <div class = "panel panel-body" style = "width: 100%; border-radius: 0;height: 500px; background-color: #fff; box-shadow: 5px 5px 5px grey; color: #000;">
                  
				  <div class = "panel panel-heading" style = "font-size: 20px; color: #222; font-weight: bold;"><center>MANAGE SIGNATORIES</center>
				  </div>

                  <div class = "col-md-12" style = "margin-top: 0px; color: #000;">
                
                <form role="form" class="col-md-5" action = "manage-order-nstp.php" method = "post" enctype="multipart/form-data">
                <input type="hidden" name="submitted" value="true"/>
       
	   <h3 style="margin-top:0px;">CREATE SIGNATORY ORDER </h3><br>
            <div class="col-md-12">
                 
				 <div class="col-md-7">
                    <label class="control-label">Position of Signatory: </label>
					<input type="hidden" name="order_number[0]" value="1"/>
					
					<h5>NSTP Moderator</h5>
                </div>
            	
				<div class="col-md-5">
                    <label class="control-label">Signatory Name: </label>
                    <?php
						$query = mysqli_query($link, "SELECT * from login_user WHERE college = 'nstp'");
						echo '<select  name="signatory[0]" class="form-control" style = "margin-top: 10px;" required="required">';
						echo '<option value=""> </option>';
						while ($row = mysqli_fetch_array($query)) {
							echo '<option value="'.$row['user_id'].'">'.$row['name'].'</option>';
						}
						echo '</select>';
						?>
                </div>
				
				<div class="form-group col-md-7" style="margin-top:10px;">
					<input type="hidden" name="order_number[1]" value="2"/>
					
					<h5>Simbahayan Director</h5>
					
				</div>
            	
				<div class="form-group col-md-5" style="margin-top:10px;">
                    <?php
						$query = mysqli_query($link, "SELECT * from login_user WHERE college='simbahayan'");
						echo '<select  name="signatory[1]" class="form-control" required="required">';
						echo '<option value=""> </option>';
						while ($row = mysqli_fetch_array($query)) {
							echo '<option value="'.$row['user_id'].'">'.$row['name'].'</option>';
						}
						echo '</select>';
						?>
				</div>
				</div>
                 
				 <div class="form-group" style="text-align:right">
				 <input style = "margin-top: 10px; color: #fff; background-color: #05B2d2;" type="reset" class="btn btn-default btn-lg"/>
				 <input style = "margin-top: 10px; color: #fff; background-color: #23cf5f;" type="submit" value="Submit" class="btn btn-default btn-lg"/>
                 </div>
        
</form>
        <div class="col-md-7" style="margin-top:10px; overflow-y: scroll; height: 350px;">
        <table class="table table-hover">
        <thead>
				<tr> 
				<th>Order: </th>
				<th>Signatory Name: </th>
				<th> </th>
				</tr>
				</thead>
        <tbody>
		  <?php
				$sql="SELECT * FROM order_signatory WHERE standard = 1 AND reference = $id order by order_number asc";
				$result = mysqli_query($link,$sql);
				
				while($row = mysqli_fetch_array($result)) {
					$r=$row['signatory_id'];
					echo "<tr>";
					echo "<td>" .$row['order_number'] . "</td>";
					echo "<td>" .$row['signatory_name'] . "</td>";
					echo "<td><a href='delete-order.php?r=".$r."'>";
					echo "Delete</a>";
					echo "</td>";
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