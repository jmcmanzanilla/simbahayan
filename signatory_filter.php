
application/x-httpd-php signatory_filter.php ( PHP script text )

<?php
include "mysql_connect.php";
session_start();
if(!isset($_SESSION['name'])){
	header("location: index.php");
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
<a href="signatory.php"><img src= "images/ust_logo1.png" style = "height: 90px;"></a>
<a href="signatory.php"><img src= "images/simba_logo.png" style = "height: 90px;"></a>
</div>

<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  <ul class="nav navbar-nav" style = "margin-left: 120px; margin-top: 30px;">
    <li><a href="signatory.php"><b>WORKSPACE</b><span class="sr-only">(current)</span></a></li>
    <li><a href="signatory-profile.php"><b>PROFILE</b></a></li>
    <li><a href="manage-order-step1.php"><b>SIGNATORIES</b></a></li> 
	<li class="active"><a href="signatory-listproposal.php?page=1"><b>PROPOSALS</b></a></li> 
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

                <div class = "panel panel-body" style = "width: 100%; border-radius: 0;height: 500px; color: #000; background-color: #fff; box-shadow: 5px 5px 5px grey;">
                  <div class = "panel panel-heading" style = "font-size: 20px; color: #222; font-weight: bold;">PROPOSALS</div>
					<form method="post" enctype="multipart/form-data" action="signatory-filter.php">
					<input type="hidden" name="submitted" value="true"/>
                  <div class="form-group col-md-4">
				  
          <br>
          <br>
          <label>FILTER BY:</label><br>
                    <label class="control-label">Status: </label>
                    <select class="form-control" name="status">
            <option> </option>
            <option value = "Pending">Pending</option>
            <option value = "For Revision">For Revision</option>
            <option value = "Approved">Approved</option>
            <option value = "Rejected">Rejected</option>
          </select>
                </div>
        <div class="form-group col-md-6">
          <br>
          <br>
          <br>
          <label>Search: </label>
          <input style="margin-top:5px;" maxlength="100" name = "search" type="text" class="form-control"/>
        </div>
		<div class="col-md-2">
		<input class="btn btn-success" style = "color: #fff; background-color: #23cf5f; border-radius: 5px; margin-top:90px" type="submit" value="Submit"/>
	</div>
		</form>
        <div class = "col-md-12">
<?php
	include "mysql_connect.php";
	if(isset($_POST['submitted'])) {
	
		$status = $_POST['status'];
		$search = $_POST['search'];
        $user_id = $_SESSION['user_id'];

		$query = "SELECT * FROM status_update";
		$conditions = array();

    if($status !=" ") {
                $sql = "SELECT proposal_id FROM status_update WHERE user_id = '$user_id'";

    }
    if($search !=" ") {
		$conditions[] = "proposal_id like '$search%' OR proj_title like '$search%' OR upload_date like '$search%'";
                $sql = $query;
                $sql .= " WHERE " . implode($conditions, ' AND ');
                $sql .= " AND user_id = '$user_id'";
    }
	
    $sql = "SELECT * from status_update WHERE user_id = '$user_id'";
					$result = mysqli_query($link, $sql);
                    $count = mysqli_num_rows($result);
                    $x = 0;
					while ($row = mysqli_fetch_array($result)){   
                        $proposal[$x] = $row['proposal_id']; 
                        $x++;
                    }
                   
	echo '<table class="table table-bordered table-hover">
        <thead style = "font-weight: bold; text-transform: uppercase;">
        <tr>
        <th>Date</th>
        <th>ID</th>
        <th>Proposal Title</th>
        <th>Status</th>
        <th>Current Signatory Position</th>
        <th> </th>
        </tr>
        </thead>

        <tbody>';  
                    $y = 0;
                    while ($y != $x) {
                    $display="SELECT * FROM proj_proposal WHERE proposal_id = ".$proposal[$y]."";
					$result = mysqli_query($link, $display);
                    $y++;
					while($row = mysqli_fetch_array($result)) {
					echo "<tr>";
					echo "<th>" . $row['target_date'] . "</th>";
					echo "<th>" . $row['proposal_id'] . "</th>";
					echo "<th>" . $row['proj_title'] . "</th>";
					echo "<th>" . $row['status'] . "</th>";
					echo "<th>" . $row['pending']. "</th>";
					echo "<th> <a href='signatory-viewproposal.php?d=$row[proposal_id]'>View</a></th>";
					echo "</tr>";
	}
    }
	echo "</tbody>";
		echo "</table>";
    }

?>
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