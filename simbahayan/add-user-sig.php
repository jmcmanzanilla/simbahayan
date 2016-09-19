<?php
include "mysql_connect.php";
session_start();
$id = $_SESSION['user_id'];
$sqlselect="SELECT position FROM signatory_profile where user_id = $id";
$results = mysqli_query($link, $sqlselect);
					
while($row = mysqli_fetch_array($results)) {
	$position = $row['position'];
	if ($position == "College Community Development Coordinator" || $position == "NSTP Moderator") {
	echo "<script type='text/javascript'></script>";
	}
	else {
		echo "<script type='text/javascript'>alert('You do not have permission to add users.');window.location = 'signatory.php';</script>";
	}
	}
	
		
	 
	if(isset($_POST['submit'])){
	
	$username = $_POST["username"];
	$name = $_POST["name"];
	$email = $_POST["email"];
	$account_type = $_POST['account_type'];
	$college = $_SESSION['college'];
	
	$sqlinsert = "INSERT INTO login_user (username, name, account_type, college, password, reference, email) VALUES ('$username', '$name', '$account_type', '$college', md5('$college'), '$id', '$email')";
	$arr_username=array();

        $query = "SELECT username FROM login_user WHERE username = '". $username ."'";  
        $result = mysqli_query($link,$query);

        while ($row=mysqli_fetch_array($result)){
            $arr_username[] = $row['username'];
            }

            if(in_array($username,$arr_username)){
            die("<script type='text/javascript'>alert('Username is already taken.');window.history.go(-1);</script>");
    } 
	if(!mysqli_query($link, $sqlinsert)){
		die("FAILED SUBMISSION");
	}
	echo "<script type='text/javascript'>alert('SUCCESSFULLY ADDED ACCOUNT'); window.location = 'add-user-sig.php';</script>";
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
    <li class="active"><a href="signatory.php"><b>WORKSPACE</b><span class="sr-only">(current)</span></a></li>
    <li><a href="signatory-profile.php"><b>PROFILE</b></a></li>
    <li><a href="manage-order-step1.php"><b>SIGNATORIES</b></a></li> 
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
    <div class = "container" style = "height: auto;">
               <div class = "col-md-12" style = "div-align: center; margin-top: 30px;">

            <div class = "col-md-12">

                <div class = "panel panel-body" style = "width: 100%; border-radius: 0;height: auto; background-color: #fff; box-shadow: 5px 5px 5px grey;">
                  <div class = "panel panel-heading" style = "font-size: 20px; color: #222; font-weight: bold;"><center>USER MANAGEMENT</center></div>

                  <div class = "col-md-12" style = "margin-top: 0px; color: #000;">
                <div class = "col-md-6">
                <div class = "col-md-12">
                <form role="form" class="form-horizontal" action = "upload-csv-sig.php" method = "post" enctype="multipart/form-data">
                <input type="hidden" name="submitted" value="true"/>
        <h4 style="margin-top:0px;">ADD MULTIPLE USERS</h4><br>
                <div class="form-group col-md-12">
					<a href="./uploads/signatoryprof.csv">Download csv file here</a>
                    <label class="control-label">Please attach CSV File to add users: </label>
                    <input type = "file" class = "form-control" name = "csv"/>
                </div>
            
         <div class = "col-md-12">
                 <div class="form-group" style="text-align:right">
         <input style = "margin-top: 10px; color: #fff; background-color: #23cf5f; border-radius: 0;" type="submit" value="Submit" class="btn btn-default btn-md"/>
       </div>
                 </div>
        
</form>
</div>

<div class = "col-md-12">
	<form role="form" class="form-horizontal" action = "add-user-sig.php" method = "post" enctype="multipart/form-data">
                <input type="hidden" name="submit" value="true"/>
        <h4 style="margin-top:0px;">ADD SINGLE USER</h4><br>
                <label>Username: </label>
				<input maxlength="100" type="text" required="required" class="form-control" name="username"/>
				<label>Name: </label>
				<input maxlength="100" type="text" required="required" class="form-control" name="name"/>
				<label>Email: </label>
				<input maxlength="100" type="text" required="required" class="form-control" name="email"/>
				<label>Account Type: </label>
				<select name = "account_type" class="form-control">
				<option value =""> </option>
				<?php
				if ($position == "NSTP Moderator") {
				echo '<option value  = "Organization">Organization </option>
				<option value  = "Signatory">Signatory </option>';
				}
				else if ($position != "NSTP Moderator") {
				echo '<option value  = "Facilitator">Facilitator </option>';
				}
				?>
				</select>
				
         <div class = "col-md-12">
                 <div class="form-group" style="text-align:right">
         <input style = "margin-top: 10px; color: #fff; background-color: #23cf5f; border-radius: 0;" type="submit" value="Submit" class="btn btn-default btn-md"/>
       </div>
                 </div>
		     
</form>

</div>
</div>
        <div class="col-md-6" style="margin-top:10px; overflow-y: scroll; height: auto;">
        <table class="table table-hover">
		<thead>
			 <tr>
            <th>Username</th>
            <th>Name</th>
            <th>Account Type</th>
          </tr>
        </thead>
		<tbody>
			 
		<?php
		
		$sql="SELECT * FROM login_user WHERE reference = '$id'";
		$result = mysqli_query($link, $sql);
		
					
		while($row = mysqli_fetch_array($result)) {
		echo "<tr>";
		echo "<td>".$row['username']."</td>";
		echo "<td>".$row['name']."</td>";
		echo "<td>".$row['account_type']."</td>";
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
<footer style = "position:fixed; bottom:0px; height:30px; width:100%; padding-top:9px; background-color:#282122; color: #fff; text-align: center; font-size: 11px;">UNIVERSITY OF SANTO TOMAS. ALL RIGHTS RESERVED. 2015.</footer>
<script src="js/jquery-2.1.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/step-monitor.js"></script>
  <script src="js/add-field.js"></script>
  <script src="js/add-row.js"></script>
</div>

</body>
	</html>
