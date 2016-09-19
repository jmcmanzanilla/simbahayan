<?php
include "mysql_connect.php";
session_start();
if(!isset($_SESSION['name'])){
	header("location: index.php");
}
$id = $_SESSION['user_id'];
$sqlselect="SELECT college FROM login_user where user_id = $id";
$results = mysqli_query($link, $sqlselect);
					
while($row = mysqli_fetch_array($results)) {
	$college = $row['college'];
	if ($college != "simbahayan") {
	echo "<script type='text/javascript'>alert('You do not have permission to view reports.');window.location = 'signatory.php';</script>";
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
<a href="signatory.php"><img src= "images/ust_logo1.png" style = "height: 90px;"></a>
<a href="signatory.php"><img src= "images/simba_logo.png" style = "height: 90px;"></a>
</div>

<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  <ul class="nav navbar-nav" style = "margin-left: 120px; margin-top: 30px;">
    <li class="active"><a href="signatory.php"><b>WORKSPACE</b><span class="sr-only">(current)</span></a></li>
    <li><a href="signatory-profile.php"><b>PROFILE</b></a></li>
    <li><a href="manage-simbahayan-1.php"><b>MANAGE SIGNATORIES</b></a></li>
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

                <div class = "panel panel-body" style = "width:100%; border-radius: 0;height: 500px; color: #000; background-color: #fff; box-shadow: 5px 5px 5px grey; font-size: 12px;">
                  <div class = "panel panel-heading" style = "font-size: 20px; color: #222; font-weight: bold;"><center>Summary of Proposals</center><a class="btn btn-default pull-right" style = "color: #fab303;" href="add-report.php">Add</a></div>

                  <table class = "table table-hover" style = "margin: 0 auto;">

                      <thead style = "font-size: 12px;">
                          <th>No.</th>
                          <th>Date Received</th>
						  <th>Proponent</th>
						  <th>Title</th>
                          <th>Project Area</th>
						  <th># of Beneficiaries</th>
						  <th>Target Date</th>
                          <th>Approved Budget</th>
						  <th>Budget Code</th>
                          <th>CR # </th>
                          <th>No. of Students Involved </th>

                          <th>No. of Faculty Involved </th>                        
<th>No. of Admin Involved </th>
<th>No. of Support Staff Involved </th>
<th>No. of Students Alumni </th>
<th>Remarks </th>				  
<th> </th>
                      </thead>

                    <tbody>
                   <?php
                    
                    $tableName="report";
$targetpage = "reports.php";
$limit = 4;

          $id = $_SESSION['user_id'];
$query = "SELECT * FROM $tableName";
$result = mysqli_query($link,$query);
$total_pages = mysqli_num_rows($result);

$stages = 3;
$page = mysql_escape_string($_GET['page']);
if($page){
$start = ($page - 1) * $limit;
}else{
$start = 0;
}
                    
				   $id = $_SESSION['user_id'];
					$name = $_SESSION['name'];
					$sql="SELECT * FROM report";
					$result = mysqli_query($link, $sql);
					
					while($row = mysqli_fetch_array($result)) {
					$proj_id = $row['proposal_id'];
					echo "<tr>";
					echo "<th>" . $row['proposal_id'] . "</th>";
					echo "<th>" . $row['date_received'] . "</th>";
					echo "<th>" . $row['lead_org'] . "</th>";
					echo "<th>" . $row['proj_title'] . "</th>";
					echo "<th>" . $row['proj_area'] . "</th>";
					echo "<th>" . $row['beneficiaries'] . "</th>";
					echo "<th>" . $row['date_target'] . "</th>";
					echo "<th>" . $row['budget_approved'] . "</th>";
					echo "<th>" . $row['budget_code'] . "</th>";
                    echo "<th>" . $row['cr_code'] . "</th>";
					echo "<th>" . $row['student'] . "</th>";
					echo "<th>" . $row['faculty'] . "</th>";
					echo "<th>" . $row['admin'] . "</th>";
					echo "<th>" . $row['staff'] . "</th>";
                    echo "<th>" . $row['alumni'] . "</th>";
					echo "<th>" . $row['remarks'] . "</th>";
					if ($row['proposal_id'] == 0) {
                    echo "<th>No PDF available</th>";
                    }
                    else {
					echo "<th><a href='signatory-viewapproved.php?d=$proj_id'>View</a></th>";
                    }
					echo "</tr>";
					}
                    
                    if ($page == 0){$page = 1;}
$prev = $page - 1;
$next = $page + 1;
$lastpage = ceil($total_pages/$limit);
$LastPagem1 = $lastpage - 1;

$paginate = '';
if($lastpage > 1)
{


$paginate .= "<ul class='pagination' style = 'float: right;'>";
// Previous
if ($page > 1){
$paginate.= "<li><a href='reports.php?page=$prev'>Previous</a></li>";
}else{
$paginate.= "<li class='disabled'><a href = ''>Previous</a></li>"; }

// Pages
if ($lastpage < 7 + ($stages * 2)) // Not enough pages to breaking it up
{
for ($counter = 1; $counter <= $lastpage; $counter++)
{
if ($counter == $page){
$paginate.= "<li class='active'><a href = ''>$counter</a></li>";
}else{
$paginate.= "<li><a href='reports.php?page=$counter'>$counter</a></li>";}
}
}
elseif($lastpage > 5 + ($stages * 2)) // Enough pages to hide a few?
{
// Beginning only hide later pages
if($page < 1 + ($stages * 2))
{
for ($counter = 1; $counter < 4 + ($stages * 2); $counter++)
{
if ($counter == $page){
$paginate.= "<li class='active'><a href = ''>$counter</a></li>";
}else{
$paginate.= "<li><a href='reports.php?page=$counter'>$counter</a></li>";}
}
$paginate.= "...";
$paginate.= "<li><a href='reports.php?page=$LastPagem1'>$LastPagem1</a></li>";
$paginate.= "<li><a href='reports.php?page=$lastpage'>$lastpage</a></li>";
}
// Middle hide some front and some back
elseif($lastpage - ($stages * 2) > $page && $page > ($stages * 2))
{
$paginate.= "<li><a href='reports.php?page=1'>1</a></li>";
$paginate.= "<li><a href='reports.php?page=2'>2</a></li>";
$paginate.= "...";
for ($counter = $page - $stages; $counter <= $page + $stages; $counter++)
{
if ($counter == $page){
$paginate.= "<li class='active'><a href = ''>$counter</a></li>";
}else{
$paginate.= "<li><a href='reports.php?page=$counter'>$counter</a></li>";}
}
$paginate.= "...";
$paginate.= "<li><a href='reports.php?page=$LastPagem1'>$LastPagem1</a></li>";
$paginate.= "<li><a href='reports.php?page=$lastpage'>$lastpage</a></li>";
}
// End only hide early pages
else
{
$paginate.= "<li><a href='reports.php?page=1'>1</a></li>";
$paginate.= "<li><a href='reports.php?page=2'>2</a></li>";
$paginate.= "...";
for ($counter = $lastpage - (2 + ($stages * 2)); $counter <= $lastpage; $counter++)
{
if ($counter == $page){
$paginate.= "<li class='active'><a href = ''>$counter</a></li>";
}else{
$paginate.= "<li><a href='reports.php?page=$counter'>$counter</a></li>";}
}
}
}

// Next
if ($page < $counter - 1){
$paginate.= "<li><a href='reports.php?page=$next'>Next</a></li>";
}else{
$paginate.= "<li class='disabled'><a href = ''>Next</a></li>";
}

$paginate.= "</ul>";


}
echo $total_pages.' Results';
// pagination
echo $paginate;
				   ?>
                    
                  </tbody>
				  </table>

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
