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
<a href="org.php"><img src= "images/ust_logo1.png" style = "height: 90px;"></a>
<a href="org.php"><img src= "images/simba_logo.png" style = "height: 90px;"></a>
</div>

<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  <ul class="nav navbar-nav" style = "margin-left: 120px; margin-top: 30px;">
    <li><a href="org.php"><b>WORKSPACE</b></a></li>
    <li><a href="org-profile.php"><b>PROFILE</b></a></li>
    <li class="active"><a href="org-listproposal.php?page=1"><b>PROPOSALS</b><span class="sr-only">(current)</span></a></li> 
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

                <div class = "panel panel-body" style = "width: 100%; border-radius: 0;height: auto; color: #000; background-color: #fff; box-shadow: 5px 5px 5px grey;">
                  <div class = "panel panel-heading" style = "font-size: 20px; color: #222; font-weight: bold;">PROPOSALS</div>
					<form method="post" enctype="multipart/form-data" action="org-filter.php">
					<input type="hidden" name="submitted" value="true"/>
                  <div class="form-group col-md-4">
          <label>FILTER BY:</label><br>
                    <label class="control-label">Status: </label>
                    <select class="form-control" name="status">
            <option> </option>
            <option>Pending</option>
            <option>For Revision</option>
            <option>Approved</option>
            <option>Rejected</option>
          </select>
                </div>
        <div class="form-group col-md-6">
          <br>
          <label>Search: </label>
          <input style="margin-top:5px;" maxlength="100" name = "search" type="text" class="form-control"/>
        </div>
		<div class="col-md-2">
		<input class="btn btn-success" style = "color: #fff; background-color: #23cf5f; border-radius: 5px; margin-top:50px" type="submit" value="Submit"/>
	</div>
		</form>
        <div class = "col-md-12">
        <table class="table table-bordered table-hover">
        <thead style = "font-weight: bold; text-transform: uppercase;">
        <tr>
        <th>Date Submitted</th>
        <th>ID</th>
        <th>Proposal Title</th>
        <th>Status</th>
        <th>Comment</th>
        <th>Current Signatory</th>
        <th> </th>
        </tr>
        </thead>

        <tbody>
        
		<?php

    $tableName="proj_proposal";
$targetpage = "org-listproposal.php";
$limit = 5;

          $id = $_SESSION['user_id'];
$query = "SELECT * FROM $tableName WHERE lead_org = $id";
$result = mysqli_query($link,$query);
$total_pages = mysqli_num_rows($result);

$stages = 3;
$page = mysql_escape_string($_GET['page']);
if($page){
$start = ($page - 1) * $limit;
}else{
$start = 0;
}
$namee = $_SESSION['name'];
                    $name = "";
                    $pending = "";
					
					$sql="SELECT * FROM  proj_proposal WHERE lead_org = $id LIMIT $start, $limit";
					$result = mysqli_query($link, $sql);					
					while($row = mysqli_fetch_array($result)) {
                    $upload_date = $row['upload_date'];
					$pending = $row['pending'];
					$name = $pending;
					$proj_id = $row['proposal_id'];
					$proj_title = $row['proj_title'];
					$status = $row['status'];
                    $reason1 = "";
                    if ($status == "Rejected") {
                        $reason = mysqli_query($link, "SELECT reason from status_update WHERE proposal_id =".$proj_id." AND action = 'Rejected'");
                        $row = mysqli_fetch_assoc($reason);
                        $reason1 = $row['reason'];    
                    }
					if ($pending != 'Complete' && $pending != 'User must complete other forms before approval begins') {
                        $name = mysqli_query($link, "SELECT name FROM login_user WHERE user_id = $pending");
                        $row = mysqli_fetch_assoc($name);
                        $name = $row['name'];
                        $position = mysqli_query($link, "SELECT position FROM signatory_profile WHERE user_id = $pending");
                        if (mysqli_num_rows($position) != 0) {
                            $row = mysqli_fetch_assoc($position);
                            $name = $row['position'];
                        }
					}
					echo "<tr>";
                    echo "<th>" . $upload_date . "</th>";
					echo "<th>" . $proj_id . "</th>";
					echo "<th>" . $proj_title . "</th>";
					echo "<th>" . $status . "</th>";
                    echo "<th>" . $reason1 . "</th>";
					echo "<th>" . $name. "</th>";
                    $program_flow = mysqli_query($link, "SELECT program_flow FROM proj_proposal WHERE proposal_id= $proj_id");
					$row = mysqli_fetch_assoc($program_flow);
					$program_flow = $row['program_flow'];
                    if ($program_flow == 0) {
                    
                        echo "<th> <a href='cover-letter.php?d=$proj_id'>Begin Upload of Other Forms</a></th>";
                        
                    }
					else if ($program_flow == 1) {
                        echo "<th> <a href='org-viewproposal.php?d=$proj_id'>View</a></th>";
                    }
					echo "</tr>";
					}

          // Initial page num setup
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
$paginate.= "<li><a href='org-listproposal.php?page=$prev'>Previous</a></li>";
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
$paginate.= "<li><a href='org-listproposal.php?page=$counter'>$counter</a></li>";}
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
$paginate.= "<li><a href='org-listproposal.php?page=$counter'>$counter</a></li>";}
}
$paginate.= "...";
$paginate.= "<li><a href='org-listproposal.php?page=$LastPagem1'>$LastPagem1</a></li>";
$paginate.= "<li><a href='org-listproposal.php?page=$lastpage'>$lastpage</a></li>";
}
// Middle hide some front and some back
elseif($lastpage - ($stages * 2) > $page && $page > ($stages * 2))
{
$paginate.= "<li><a href='org-listproposal.php?page=1'>1</a></li>";
$paginate.= "<li><a href='org-listproposal.php?page=2'>2</a></li>";
$paginate.= "...";
for ($counter = $page - $stages; $counter <= $page + $stages; $counter++)
{
if ($counter == $page){
$paginate.= "<li class='active'><a href = ''>$counter</a></li>";
}else{
$paginate.= "<li><a href='org-listproposal.php?page=$counter'>$counter</a></li>";}
}
$paginate.= "...";
$paginate.= "<li><a href='org-listproposal.php?page=$LastPagem1'>$LastPagem1</a></li>";
$paginate.= "<li><a href='org-listproposal.php?page=$lastpage'>$lastpage</a></li>";
}
// End only hide early pages
else
{
$paginate.= "<li><a href='org-listproposal.php?page=1'>1</a></li>";
$paginate.= "<li><a href='org-listproposal.php?page=2'>2</a></li>";
$paginate.= "...";
for ($counter = $lastpage - (2 + ($stages * 2)); $counter <= $lastpage; $counter++)
{
if ($counter == $page){
$paginate.= "<li class='active'><a href = ''>$counter</a></li>";
}else{
$paginate.= "<li><a href='org-listproposal.php?page=$counter'>$counter</a></li>";}
}
}
}

// Next
if ($page < $counter - 1){
$paginate.= "<li><a href='org-listproposal.php?page=$next'>Next</a></li>";
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
