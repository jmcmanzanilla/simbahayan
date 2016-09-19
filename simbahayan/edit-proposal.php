<?php
include "mysql_connect.php";
session_start();
if(!isset($_SESSION['name'])){
	header("location: index.php");
}
$id = $_SESSION['user_id'];
$d = $_GET['d'];
$totalfund = 0;
$totalorg = 0;
$totalcom = 0;
$sqlselect="SELECT edit FROM proj_proposal where proposal_id = $d";
$results = mysqli_query($link, $sqlselect);
while($row = mysqli_fetch_array($results)) {
	$edit =$row['edit'];
				}
	if ($edit == 0) {
	echo "<script type='text/javascript'>alert('You have not been given permission to edit proposal.');window.location = 'org-listproposal.php';</script>";
	}
    
$sqlproposal = "SELECT * FROM proj_proposal WHERE proposal_id = '$d'";
$result = mysqli_query($link, $sqlproposal); 
while($row = mysqli_fetch_array($result)) { 
    
	$lead_org = $row['lead_org'];
	$affiliation = $row['affiliation'];
	$college = $row['college'];

	$lname1 = $row['lname1'];
	$fname1 = $row['fname1'];
	$mi1 = $row['mi1'];
	$cnum1 = $row['cnum1'];
	$email1 = $row['email1'];

	$lname2 = $row['lname2'];
	$fname2 = $row['fname2'];
	$mi2 = $row['mi2'];
	$cnum2 = $row['cnum2'];
	$email2 = $row['email2'];

	$collab = $row['collab'];

	$proj_title = $row['proj_title'];
	$prog_areadev = $row['prog_areadev'];
	$community = $row['community'];
	$participants = $row['participants'];

	$comser_budget = $row['comser_budget'];
	$org_budget = $row['org_budget'];
	$com_budget = $row['com_budget'];

	$proj_background = $row['proj_background'];
	$gen_objective = $row['gen_objective'];
	$spec_obj1 = $row['spec_obj1'];
	$exp_result1 = $row['exp_result1'];
	$spec_obj2 = $row['spec_obj2'];
	$exp_result2 = $row['exp_result2'];
	$spec_obj3 = $row['spec_obj3'];
	$exp_result3 = $row['exp_result3'];
    $days = $row['days'];
	
	
}
if(isset($_POST['submitted'])){
$d = $_GET['d'];
     $lead_org = $_POST['lead_org'];
	$affiliation = $_POST['affiliation'];
	$college = $_POST['college'];

	$lname1 = $_POST['lname1'];
	$fname1 = $_POST['fname1'];
	$mi1 = $_POST['mi1'];
	$cnum1 = $_POST['cnum1'];
	$email1 = $_POST['email1'];

	$lname2 = $_POST['lname2'];
	$fname2 = $_POST['fname2'];
	$mi2 = $_POST['mi2'];
	$cnum2 = $_POST['cnum2'];
	$email2 = $_POST['email2'];

	$collab = $_POST['collab'];
    $prog_areadev = $_POST['prog_areadev'];
	$proj_title = $_POST['proj_title'];
	$community = $_POST['community'];
	$participants = $_POST['participants'];

	$comser_budget = $_POST['comser_budget'];
	$org_budget = $_POST['org_budget'];
	$com_budget = $_POST['com_budget'];
    
    $proj_background = $_POST['proj_background'];
    $gen_objective = $_POST['gen_objective'];
    $spec_obj1 = $_POST['spec_obj1'];
	$exp_result1 = $_POST['exp_result1'];
	$spec_obj2 = $_POST['spec_obj2'];
	$exp_result2 = $_POST['exp_result2'];
	$spec_obj3 = $_POST['spec_obj3'];
	$exp_result3 = $_POST['exp_result3'];
    
    for ($x = 0; $x < $days; $x++) {
        $budget_id = $_POST['budget_id'][$x];
        $pname0 = $_POST['pname0'][$x];
        $pmail0 = $_POST['pmail0'][$x];
        $pfund0 = $_POST['pfund0'][$x];
        $porg0 = $_POST['porg0'][$x];
        $pcom0 = $_POST['pcom0'][$x];
        $pname1 = $_POST['pname1'][$x];
        $pmail1 = $_POST['pmail1'][$x];
        $pfund1 = $_POST['pfund1'][$x];
        $porg1 = $_POST['porg1'][$x];
        $pcom1 = $_POST['pcom1'][$x];
        $pname2 = $_POST['pname2'][$x];
        $pmail2 = $_POST['pmail2'][$x];
        $pfund2 = $_POST['pfund2'][$x];
        $porg2 = $_POST['porg2'][$x];
        $pcom2 = $_POST['pcom2'][$x];
        $pname3 = $_POST['pname3'][$x];
        $pmail3 = $_POST['pmail3'][$x];
        $pfund3 = $_POST['pfund3'][$x];
        $porg3 = $_POST['porg3'][$x];
        $pcom3 = $_POST['pcom3'][$x];
        $pname4 = $_POST['pname4'][$x];
        $pmail4 = $_POST['pmail4'][$x];
        $pfund4 = $_POST['pfund4'][$x];
        $porg4 = $_POST['porg4'][$x];
        $pcom4 = $_POST['pcom4'][$x];
        
        $oname0 = $_POST['oname0'][$x];
        $omail0 = $_POST['omail0'][$x];
        $ofund0 = $_POST['ofund0'][$x];
        $oorg0 = $_POST['oorg0'][$x];
        $ocom0 = $_POST['ocom0'][$x];
        $oname1 = $_POST['oname1'][$x];
        $omail1 = $_POST['omail1'][$x];
        $ofund1 = $_POST['ofund1'][$x];
        $oorg1 = $_POST['oorg1'][$x];
        $ocom1 = $_POST['ocom1'][$x];
        $oname2 = $_POST['oname2'][$x];
        $omail2 = $_POST['omail2'][$x];
        $ofund2 = $_POST['ofund2'][$x];
        $oorg2 = $_POST['oorg2'][$x];
        $ocom2 = $_POST['ocom2'][$x];
        $oname3 = $_POST['oname3'][$x];
        $omail3 = $_POST['omail3'][$x];
        $ofund3 = $_POST['ofund3'][$x];
        $oorg3 = $_POST['oorg3'][$x];
        $ocom3 = $_POST['ocom3'][$x];
        $oname4 = $_POST['oname4'][$x];
        $omail4 = $_POST['omail4'][$x];
        $ofund4 = $_POST['ofund4'][$x];
        $oorg4 = $_POST['oorg4'][$x];
        $ocom4 = $_POST['ocom4'][$x];
        
        $mname0 = $_POST['mname0'][$x];
        $mmail0 = $_POST['mmail0'][$x];
        $mfund0 = $_POST['mfund0'][$x];
        $morg0 = $_POST['morg0'][$x];
        $mcom0 = $_POST['mcom0'][$x];
        $mname1 = $_POST['mname1'][$x];
        $mmail1 = $_POST['mmail1'][$x];
        $mfund1 = $_POST['mfund1'][$x];
        $morg1 = $_POST['morg1'][$x];
        $mcom1 = $_POST['mcom1'][$x];
        $mname2 = $_POST['mname2'][$x];
        $mmail2 = $_POST['mmail2'][$x];
        $mfund2 = $_POST['mfund2'][$x];
        $morg2 = $_POST['morg2'][$x];
        $mcom2 = $_POST['mcom2'][$x];
        $mname3 = $_POST['mname3'][$x];
        $mmail3 = $_POST['mmail3'][$x];
        $mfund3 = $_POST['mfund3'][$x];
        $morg3 = $_POST['morg3'][$x];
        $mcom3 = $_POST['mcom3'][$x];
        $mname4 = $_POST['mname4'][$x];
        $mmail4 = $_POST['mmail4'][$x];
        $mfund4 = $_POST['mfund4'][$x];
        $morg4 = $_POST['morg4'][$x];
        $mcom4 = $_POST['mcom4'][$x];
        
        $otname0 = $_POST['otname0'][$x];
        $otmail0 = $_POST['otmail0'][$x];
        $otfund0 = $_POST['otfund0'][$x];
        $otorg0 = $_POST['otorg0'][$x];
        $otcom0 = $_POST['otcom0'][$x];
        $otname1 = $_POST['otname1'][$x];
        $otmail1 = $_POST['otmail1'][$x];
        $otfund1 = $_POST['otfund1'][$x];
        $otorg1 = $_POST['otorg1'][$x];
        $otcom1 = $_POST['otcom1'][$x];
        $otname2 = $_POST['otname2'][$x];
        $otmail2 = $_POST['otmail2'][$x];
        $otfund2 = $_POST['otfund2'][$x];
        $otorg2 = $_POST['otorg2'][$x];
        $otcom2 = $_POST['otcom2'][$x];
        $otname3 = $_POST['otname3'][$x];
        $otmail3 = $_POST['otmail3'][$x];
        $otfund3 = $_POST['otfund3'][$x];
        $otorg3 = $_POST['otorg3'][$x];
        $otcom3 = $_POST['otcom3'][$x];
        $otname4 = $_POST['otname4'][$x];
        $otmail4 = $_POST['otmail4'][$x];
        $otfund4 = $_POST['otfund4'][$x];
        $otorg4 = $_POST['otorg4'][$x];
        $otcom4 = $_POST['otcom4'][$x];
        
        $ptotalfund = $pfund0 + $pfund1 + $pfund2 + $pfund3 + $pfund4;
        $ptotalorg = $porg0 + $porg1 + $porg2 + $porg3 + $porg4;
        $ptotalcom = $pcom0 + $pcom1 + $pcom2 + $pcom3 + $pcom4;
        
        $ototalfund = $ofund0 + $ofund1 + $ofund2 + $ofund3 + $ofund4;
        $ototalorg = $oorg0 + $oorg1 + $oorg2 + $oorg3 + $oorg4;
        $ototalcom = $ocom0 + $ocom1 + $ocom2 + $ocom3 + $ocom4;
        
        $mtotalfund = $mfund0 + $mfund1 + $mfund2 + $mfund3 + $mfund4;
        $mtotalorg = $morg0 + $morg1 + $morg2 + $morg3 + $morg4;
        $mtotalcom = $mcom0 + $mcom1 + $mcom2 + $mcom3 + $mcom4;
        
        $ottotalfund = $otfund0 + $otfund1 + $otfund2 + $otfund3 + $otfund4;
        $ottotalorg = $otorg0 + $otorg1 + $otorg2 + $otorg3 + $otorg4;
        $ottotalcom = $otcom0 + $otcom1 + $otcom2 + $otcom3 + $otcom4;
        
        $totalfund = $totalfund + ($ptotalfund + $mtotalfund + $ototalfund + $ottotalfund);
        $totalorg = $totalorg + ($ptotalorg + $mtotalorg + $ototalorg + $ottotalorg);
        $totalcom = $totalcom + ($ptotalcom + $mtotalcom + $ototalcom + $ottotalcom);
    
	$sqlinsert = "UPDATE budget_proposal SET pname0 = '$pname0', pmail0 = '$pmail0', pfund0 = '$pfund0', porg0 = '$porg0', pcom0 = '$pcom0', pname1 = '$pname1', pmail1 = '$pmail1', pfund1 = '$pfund1', porg1 = '$porg1', pcom1 = '$pcom1', pname2 = '$pname2', pmail2 = '$pmail2', pfund2 = '$pfund2', porg2 = '$porg2', pcom2 = '$pcom2', pname3 = '$pname3', pmail3 = '$pmail3', pfund3 = '$pfund3', porg3 = '$porg3', pcom3 = '$pcom3', pname4 = '$pname4', pmail4 = '$pmail4' , pfund4 = '$pfund4', porg4 = '$porg4', pcom4 = '$pcom4', oname0 = '$oname0', omail0 = '$omail0', ofund0 = '$ofund0', oorg0 = '$oorg0', ocom0 = '$ocom0', oname1 = '$oname1', omail1 = '$omail1', ofund1 = '$ofund1', oorg1 = '$oorg1', ocom1 = '$ocom1', oname2 = '$oname2', omail2 = '$omail2', ofund2 = '$ofund2', oorg2 = '$oorg2', ocom2 = '$ocom2', oname3 = '$oname3', omail3 = '$omail3', ofund3 = '$ofund3', oorg3 = '$oorg3', ocom3 = '$ocom3', oname4 = '$oname4', omail4 = '$omail4', ofund4 = '$ofund4', oorg4 = '$oorg4', ocom4 = '$ocom4', mname0 = '$mname0', mmail0 = '$mmail0', mfund0 = '$mfund0', morg0 = '$morg0' , mcom0 = '$mcom0', mname1 = '$mname1', mmail1 = '$mmail1', mfund1 = '$mfund1', morg1 = '$morg1', mcom1 = '$mcom1', mname2 = '$mname2', mmail2 = '$mmail2', mfund2 = '$mfund2', morg2 = '$morg2', mcom2 = '$mcom2', mname3 = '$mname3', mmail3 = '$mmail3', mfund3 = '$mfund3', morg3 = '$morg3', mcom3 = '$mcom3', mname4 = '$mname4', mmail4 = '$mmail4' , mfund4 = '$mfund4', morg4 = '$morg4', mcom4 = '$mcom4', otname0 = '$otname0', otmail0 = '$otmail0', otfund0 = '$otfund0', otorg0 = '$otorg0', otcom0 = '$otcom0', otname1 = '$otname1', otmail1 = '$otmail1', otfund1 = '$otfund1', otorg1 = '$otorg1', otcom1 = '$otcom1', otname2 = '$otname2', otmail2 = '$otmail2', otfund2 = '$otfund2', otorg2 = '$otorg2', otcom2 = '$otcom2', otname3 = '$otname3', otmail3 = '$otmail3', otfund3 = '$otfund3', otorg3 = '$otorg3', otcom3 = '$otcom3', otname4 = '$otname4', otmail4 = '$otmail4', otfund4 = '$otfund4', otorg4 = '$otorg4', ptotalfund = '$ptotalfund', ptotalorg = '$ptotalorg', ptotalcom = '$ptotalcom', ototalfund = '$ototalfund', ototalorg = '$ototalorg', ototalcom = '$ototalcom', mtotalfund = '$mtotalfund', mtotalorg = '$mtotalorg', mtotalcom = '$mtotalcom', ottotalfund = '$ottotalfund', ottotalorg = '$ottotalorg', ottotalcom = '$ottotalcom', totalfund = '$totalfund', totalorg = '$totalorg', totalcom = '$totalcom' WHERE  budget_id = $budget_id";
    
   /*$sqldelete = "DELETE FROM budget_proposal WHERE proposal_id = $d";
    
    $sqlinsert = "INSERT INTO budget_proposal (proposal_id, pname0, pmail0, pfund0, porg0, pcom0, pname1, pmail1, pfund1, porg1, pcom1, pname2, pmail2, pfund2, porg2, pcom2, pname3, pmail3, pfund3, porg3, pcom3, pname4, pmail4, pfund4, porg4, pcom4, oname0, omail0, ofund0, oorg0, ocom0, oname1, omail1, ofund1, oorg1, ocom1, oname2, omail2, ofund2, oorg2, ocom2, oname3, omail3, ofund3, oorg3, ocom3, oname4, omail4, ofund4, oorg4, ocom4, mname0, mmail0, mfund0, morg0, mcom0, mname1, mmail1, mfund1, morg1, mcom1, mname2, mmail2, mfund2, morg2, mcom2, mname3, mmail3, mfund3, morg3, mcom3, mname4, mmail4, mfund4, morg4, mcom4, otname0, otmail0, otfund0, otorg0, otcom0, otname1, otmail1, otfund1, otorg1, otcom1, otname2, otmail2, otfund2, otorg2, otcom2, otname3, otmail3, otfund3, otorg3, otcom3, otname4, otmail4, otfund4, otorg4, ptotalfund, ptotalorg, ptotalcom, ototalfund, ototalorg, ototalcom, mtotalfund, mtotalorg, mtotalcom, ottotalfund, ottotalorg, ottotalcom, totalfund, totalorg, totalcom) VALUES ('$d','$pname0', '$pmail0', '$pfund0', '$porg0', '$pcom0', '$pname1', '$pmail1', '$pfund1', '$porg1', '$pcom1', '$pname2', '$pmail2', '$pfund2', '$porg2', '$pcom2', '$pname3', '$pmail3', '$pfund3', '$porg3', '$pcom3', '$pname4', '$pmail4', '$pfund4', '$porg4', '$pcom4', '$oname0', '$omail0', '$ofund0', '$oorg0', '$ocom0', '$oname1', '$omail1', '$ofund1', '$oorg1', '$ocom1', '$oname2', '$omail2', '$ofund2', '$oorg2', '$ocom2', '$oname3', '$omail3', '$ofund3', '$oorg3', '$ocom3', '$oname4', '$omail4', '$ofund4', '$oorg4', '$ocom4', '$mname0', '$mmail0', '$mfund0', '$morg0', '$mcom0', '$mname1', '$mmail1', '$mfund1', '$morg1', '$mcom1', '$mname2', '$mmail2', '$mfund2', '$morg2', '$mcom2', '$mname3', '$mmail3', '$mfund3', '$morg3', '$mcom3', '$mname4', '$mmail4', '$mfund4', '$morg4', '$mcom4', '$otname0', '$otmail0', '$otfund0', '$otorg0', '$otcom0', '$otname1', '$otmail1', '$otfund1', '$otorg1', '$otcom1', '$otname2', '$otmail2', '$otfund2', '$otorg2', '$otcom2', '$otname3', '$otmail3', '$otfund3', '$otorg3', '$otcom3', '$otname4', '$otmail4', '$otfund4', '$otorg4', '$ptotalfund', '$ptotalorg', '$ptotalcom', '$ototalfund', '$ototalorg', '$ototalcom', '$mtotalfund', '$mtotalorg', '$mtotalcom', '$ottotalfund', '$ottotalorg', '$ottotalcom', '$totalfund', '$totalorg', '$totalcom')";*/
    
    /*if(!mysqli_query($link, $sqldelete)){
		die("<script type='text/javascript'>alert('UNABLE TO EDIT!'); window.history.go(-1);</script>");
	}*/
        
	if(!mysqli_query($link, $sqlinsert)){
		die("<script type='text/javascript'>alert('UNABLE TO  BUDGET!'); window.history.go(-1);</script>");
	}
	
    }
    $sqlproposal = "UPDATE proj_proposal SET lead_org = '$lead_org', affiliation = '$affiliation', college = '$college', lname1 = '$lname1', fname1 = '$fname1', mi1 = '$mi1', cnum1 = '$cnum1', email1 = '$email1', lname2 = '$lname2', fname2 = '$fname2', mi2 = '$mi2', cnum2 = '$cnum2', email2 = '$email2', collab = '$collab', proj_title = '$proj_title', prog_areadev = '$prog_areadev', community = '$community', participants = '$participants', comser_budget = '$comser_budget', org_budget = '$org_budget', com_budget = '$com_budget', proj_background = '$proj_background', gen_objective = '$gen_objective', spec_obj1 = '$spec_obj1', exp_result1 = '$exp_result1' WHERE proposal_id = '$d'" ;
     
    if(!mysqli_query($link, $sqlproposal)){
		die("<script type='text/javascript'>alert('UNABLE EDIT BUDGET!'); window.history.go(-1);</script>");
        
    }
    echo "<script type='text/javascript'>alert('EDIT SUCCESSFUL'); window.location ='edit-proposal.php?d=$d';</script>";
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

.stepwizard-step p {
  margin-top: 10px;
}

.stepwizard-row {
  display: table-row;
}

.stepwizard {
  display: table;
  width: 100%;
  position: relative;
}

.stepwizard-step button[disabled] {
  opacity: 1 !important;
  filter: alpha(opacity=100) !important;
}

.stepwizard-row:before {
  top: 14px;
  bottom: 0;
  position: absolute;
  content: " ";
  width: 100%;
  height: 1px;
  background-color: #ccc;
  z-order: 0;

}

.stepwizard-step {
  display: table-cell;
  text-align: center;
  position: relative;
}

.btn-circle {
  width: 30px;
  height: 30px;
  text-align: center;
  padding: 6px 0;
  font-size: 12px;
  line-height: 1.428571429;
  border-radius: 15px;
}

.nextBtn {
  float: right;
  width: 10%;
  margin-right: 10px;
  margin-top: 40px;
  font-size: 15px;
  height:50px;
  overflow:auto;
}
</style>

	<body style = "background-color: #d8ced1; font-family: 'RobotoDraft'; height: 100%; color: #222; font-size: 14px; padding-top: 5%; padding-bottom: 10%;">
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
<a href="org.html"><img src= "images/ust_logo1.png" style = "height: 90px;"></a>
<a href="org.html"><img src= "images/simba_logo.png" style = "height: 90px;"></a>
</div>

<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  <ul class="nav navbar-nav" style = "margin-left: 120px; margin-top: 30px;">
    <li class="active"><a href="org.php"><b>WORKSPACE</b><span class="sr-only">(current)</span></a></li>
    <li><a href="org-profile.php"><b>PROFILE</b></a></li>
    <li><a href="org-listproposal.php"><b>PROPOSALS</b></a></li> 
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

               <div class = "col-md-12" style = "div-align: center; margin-top: 10px;">

            <div class = "col-md-12">

                <div class = "panel panel-body" style = "width: 100%; border-radius: 0;height: auto; color: #000; margin-bottom: 50px; background-color: #fff; box-shadow: 5px 5px 5px grey;">
                  <div class = "panel panel-heading" style = "font-size: 20px; color: #222; font-weight: bold;"><center>PROJECT PROPOSAL</center></div>

                  <div class = "col-md-12" style = "margin-top: 30px; font-size: 16px;">

                 <form role='form' class='form-horizontal' method='post' action='edit-proposal.php?d=<?php echo $d;?>' enctype='multipart/form-data'>
    <input type="hidden" name="submitted" value="true"/>
    <!-- step 1 -->
        <div class="col-md-12">
          <h4>ORGANIZATION INFORMATION</h4>

          <div class="form-group col-md-12">
                    <label class="control-label">Organization Name Affiliated: </label>
                    <select class="form-control" name="lead_org">
            <option value="<?php echo $_SESSION['user_id']?>"><?php echo $_SESSION['name'];?></option>
          </select>
                </div>

          <!-- Affiliation Dropdown Menu -->
          <div class="form-group col-md-12">
      <label class="control-label" style="font-weight:bold">Affiliation: </label>
                    <select class="form-control" name="affiliation">
		 <?php 
							echo '<option value="'.$affiliation.'">'.$affiliation.'</option>';
						
						echo '</select>';
						
		?>
          </div>
      
      <div class="form-group col-md-12">
                    <label class="control-label" style="font-weight:bold">College: </label>
                    <select class="form-control" name="college">
		 <?php 
							echo '<option value="'.$college.'">'.$college.'</option>';
						
						echo '</select>';
						
		?>
                </div>
        <!-- end of Affiliation Dropdown Menu -->

        <!-- contact person -->
          <div class="form-group col-md-12">
            <div class="col-md-1"><h5 style="font-weight:bold">Contact Person 1</h5></div>
            <div class="col-md-5">
              <label class="control-label">Last Name</label>
              <input maxlength="100" type="text" required="required" class="form-control" name="lname1" value="<?php echo $lname1;?>"/>
            </div>
            <div class="col-md-5">
              <label class="control-label">First Name</label>
              <input maxlength="100" type="text" required="required" class="form-control" name="fname1" value="<?php echo $fname1;?>"/>
            </div>
            <div class="col-md-1">
              <label class="control-label">M.I.</label>
              <input maxlength="100" type="type" required="required" class="form-control" name="mi1" value="<?php echo $mi1;?>"/>
            </div>
          </div>
          <div class="form-group col-md-12">
            <div class="col-md-1"></div>
            <div class="col-md-4">
              <label class="control-label">Contact Number</label>
              <input maxlength="100" type="text" required="required" class="form-control" name="cnum1" value="<?php echo $cnum1;?>"/>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-5">
              <label class="control-label">E-mail Address</label>
              <input maxlength="100" type="text" required="required" class="form-control" name="email1" value="<?php echo $email1;?>"/>
            </div>
          </div>
          <div class="form-group col-md-12">
            <div class="col-md-1"><h5 style="font-weight:bold">Contact Person 2</h5></div>
            <div class="col-md-5">
              <label class="control-label">Last Name</label>
              <input maxlength="100" type="text" required="required" class="form-control" name="lname2" value="<?php echo $lname2; ?>"/>
            </div>
            <div class="col-md-5">
              <label class="control-label">First Name</label>
              <input maxlength="100" type="text" required="required" class="form-control" name="fname2" value="<?php echo $fname2; ?>"/>
            </div>
            <div class="col-md-1">
              <label class="control-label">M.I.</label>
              <input maxlength="100" type="text" required="required" class="form-control" name="mi2" value="<?php echo $mi2; ?>"/>
            </div>
          </div>
          <div class="form-group col-md-12">
            <div class="col-md-1"></div>
            <div class="col-md-4">
              <label class="control-label">Contact Number</label>
              <input maxlength="100" type="text" required="required" class="form-control" name="cnum2" value="<?php echo $cnum2; ?>"/>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-5">
              <label class="control-label">E-mail Address</label>
              <input maxlength="100" type="text" required="required" class="form-control" name="email2" value="<?php echo $email2; ?>"/>
            </div>
          </div>
          <!-- end of contact person -->

          <div class="form-group col-md-12">
            <label class="control-label" style="font-weight:bold">Collaborating Organizations (put NA if none)</label>
            <input maxlength="100" type="text" required="required" class="form-control" name="collab" value="<?php echo $collab; ?>"/>
          </div>

          <h4>GENERAL PROJECT OVERVIEW</h4>

          <div class="form-group col-md-12">
            <label class="control-label" style="font-weight:bold">Project Title (maximum of 15 words)</label>
            <input maxlength="140" type="text" required="required" class="form-control" name="proj_title" value="<?php echo $proj_title;?>"/>
          </div>

          <!-- Program Area Radio Button -->
           <div class="form-group col-md-12">
            <label class="control-label" style="font-weight:bold">Program Area for Development (choose only one)</label>
            <div class="radio">
              <label><input type="radio" name="prog_areadev" value="Health and Wellness Development" <?php if($prog_areadev === 'Health and Wellness Development') echo 'checked="checked"';?>>Health and Wellness Development</label>
            </div>
            <div class="radio">
              <label><input type="radio" name="prog_areadev" value="Equitable and Inclusive Education" <?php if($prog_areadev === 'Equitable and Inclusive Education') echo 'checked="checked"';?>>Equitable and Inclusive Education</label>
            </div>
            <div class="radio">
              <label><input type="radio" name="prog_areadev" value="Leadership, Organizational Development and Good Governance" <?php if($prog_areadev === 'Leadership, Organizational Development and Good Governance') echo 'checked="checked"';?>>Leadership, Organizational Development and Good Governance</label>
            </div>
            <div class="radio">
              <label><input type="radio" name="prog_areadev" value="Employability and Social Enterprise Development" <?php if($prog_areadev === 'Employability and Social Enterprise Development') echo 'checked="checked"';?>>Employability and Social Enterprise Development</label>
            </div>
            <div class="radio">
              <label><input type="radio" name="prog_areadev" value="Socio-pastoral Ministry and Evangelization" <?php if($prog_areadev === 'Socio-pastoral Ministry and Evangelization') echo 'checked="checked"';?>>Socio-pastoral Ministry and Evangelization</label>
            </div>
            <div class="radio">
              <label><input type="radio" name="prog_areadev" value="Heritage, Culture and Sports and Development" <?php if($prog_areadev === 'Heritage, Culture and Sports and Development') echo 'checked="checked"';?>>Heritage, Culture and Sports and Development</label>
            </div>
            <div class="radio">
              <label><input type="radio" name="prog_areadev" value="Environmental Sustainability and Infrastructure Development" <?php if($prog_areadev === 'Environmental Sustainability and Infrastructure Development') echo 'checked="checked"';?>>Environmental Sustainability and Infrastructure Development</label>
            </div>
            <div class="radio">
              <label><input type="radio" name="prog_areadev" value="Disaster Risk Reduction and Management" <?php if($prog_areadev === 'Disaster Risk Reduction and Management') echo 'checked="checked"';?>>Disaster Risk Reduction and Management</label>
            </div>
          </div>
          <!-- end of Program Area Radio Button -->

          <div class="form-group col-md-12">
            <div class="col-md-2"><h5 style="font-weight: bold">Target Community/Institution Participants</h5></div>
            <div class="col-md-5">
              <label class="control-label">Community(ies) or Institution(s)</label>
              <input maxlength="100" type="text" required="required" class="form-control" name="community" value="<?php echo $community;?>"/>
            </div>
            <div class="col-md-5">
              <label class="control-label">Number of Participants</label>
              <input maxlength="100" type="number" required="required" class="form-control" name="participants" value="<?php echo $participants;?>"/>
            </div>
          </div>


          <div class="form-group col-md-12">          
            <div class="col-md-2"><h5 style="font-weight:bold">Proposed Budget in Php</h5></div>
            <div class="col-md-3">
              <label class="control-label">Community Service Fund</label>
              <input class="form-control" type="text" required="required" name="comser_budget" value="<?php echo $comser_budget;?>"/>
            </div>
            <div class="col-md-3">
              <label class="control-label">Organizational Counterpart</label>
              <input class="form-control" type="text" required="required" name="org_budget" value="<?php echo $org_budget;?>"/>
            </div>
            <div class="col-md-3">
              <label class="control-label">Community Counterpart</label>
              <input class="form-control" type="text" required="required" name="com_budget" value="<?php echo $com_budget;?>"/>
            </div>
          </div>
          
          <div class="col-md-12">
                    <label class="control-label" style="font-weight:bold">Project Background</label>
                    <p>What specific problem or need in the partner community or institution does your organization wish to address? Why is it important? How is the project related to your chosen program area?</p>
                    <textarea class="form-control" rows="5" cols="10" maxlength="1500" type="text" required="required" placeholder="Insert Project Background Here" name="proj_background"><?php echo $proj_background;?></textarea>
                  </div>
                  
          <div class="col-md-12">
                    <label class="control-label" style="font-weight:bold">General Objective</label>
                    <p>What is the overall intention of your community development project? What does it realistically intend to achieve within the duration of the project? Only state one general objective.</p>
                    <textarea class="form-control" rows="5" cols="10" maxlength="1500" type="text" required="required" placeholder="Insert General Objective Here" name="gen_objective"><?php echo $gen_objective;?></textarea>
                  </div>
                  
             <div class="col-md-12">
                    <label class="control-label" style="font-weight:bold">Specific Objectives</label>
                    <p>What are the specific steps that need to be fulfilled in order to achieve the general objective of your community development project? What are the expected results for each specific objective? Identify three specific objectives.</p>
                    <div class="row clearfix">
                      <div class="col-md-12 column">
                        <table class="table table-bordered table-hover">
                          <thead>
                            <tr>
                              <th class="text-center">Specific Objectives</th>
                              <th class="text-center">Expected Results</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td><textarea type="text" placeholder='Specific Objective 1' class="form-control" name="spec_obj1" required><?php echo $spec_obj1;?></textarea></td>
                              <td><textarea type="text" placeholder='Expected Results 1' class="form-control" name="exp_result1" required="required"><?php echo $exp_result1;?></textarea></td>
                            </tr>
                            <tr>
                              <td><textarea type="text" placeholder='Specific Objective 2' class="form-control" name="spec_obj2" required><?php echo $spec_obj2;?></textarea></td>
                              <td><textarea type="text" placeholder='Expected Results 2' class="form-control" name="exp_result2" required = "required"><?php echo $exp_result2;?></textarea></td>
                            </tr>
                            <tr>
                              <td><textarea type="text" placeholder='Specific Objective 3' class="form-control"name="spec_obj3" required><?php echo $spec_obj3;?></textarea></td>
                              <td><textarea type="text" placeholder='Expected Results 3' class="form-control" name="exp_result3" required="required"><?php echo $exp_result3;?></textarea></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
        </div>
    <!-- end of step 1 -->

    <!-- step 2 -->
        <div class="col-md-12">
          <h4>BUDGET PROPOSAL</h4>
            <div class="form-group">
              <div class="col-md-12">

<div class = "panel panel-body" style = "width: 100%; border-radius: 0;height: auto; color: #000; margin-bottom: 50px; background-color: #fff; box-shadow: 5px 5px 5px grey;">

                  <div class = "col-md-12" style = "margin-top: 30px; font-size: 16px;">
<?php
                $test = "SELECT days from proj_proposal WHERE proposal_id = $d";
                $result = mysqli_query($link, $test);
                while ($row = mysqli_fetch_array($result)) {
                    $days = $row['days'];
                }
                $sql = "SELECT * from budget_proposal WHERE proposal_id = $d";
                $result = mysqli_query($link,$sql);
                
                for ($x = 0; $x < $days; $x++) {
                
                while($row = mysqli_fetch_array($result)) {
                    $budget_id[$x] = $row['budget_id'];
                    $pname0[$x] = $row['pname0'];
                    $pmail0[$x] = $row['pmail0'];
                    $pfund0[$x] = $row['pfund0'];
                    $porg0[$x] = $row['porg0'];
                    $pcom0[$x] = $row['pcom0'];
                    $pname1[$x] = $row['pname1'];
                    $pmail1[$x] = $row['pmail1'];
                    $pfund1[$x] = $row['pfund1'];
                    $porg1[$x] = $row['porg1'];
                    $pcom1[$x] = $row['pcom1'];
                    $pname2[$x] = $row['pname2'];
                    $pmail2[$x] = $row['pmail2'];
                    $pfund2[$x] = $row['pfund2'];
                    $porg2[$x] = $row['porg2'];
                    $pcom2[$x] = $row['pcom2'];
                    $pname3[$x] = $row['pname3'];
                    $pmail3[$x] = $row['pmail3'];
                    $pfund3[$x] = $row['pfund3'];
                    $porg3[$x] = $row['porg3'];
                    $pcom3[$x] = $row['pcom3'];
                    $pname4[$x] = $row['pname4'];
                    $pmail4[$x] = $row['pmail4'];
                    $pfund4[$x] = $row['pfund4'];
                    $porg4[$x] = $row['porg4'];
                    $pcom4[$x] = $row['pcom4'];
                    
                    $oname0[$x] = $row['oname0'];
                    $omail0[$x] = $row['omail0'];
                    $ofund0[$x] = $row['ofund0'];
                    $oorg0[$x] = $row['oorg0'];
                    $ocom0[$x] = $row['ocom0'];
                    $oname1[$x] = $row['oname1'];
                    $omail1[$x] = $row['omail1'];
                    $ofund1[$x] = $row['ofund1'];
                    $oorg1[$x] = $row['oorg1'];
                    $ocom1[$x] = $row['ocom1'];
                    $oname2[$x] = $row['oname2'];
                    $omail2[$x] = $row['omail2'];
                    $ofund2[$x] = $row['ofund2'];
                    $oorg2[$x] = $row['oorg2'];
                    $ocom2[$x] = $row['ocom2'];
                    $oname3[$x] = $row['oname3'];
                    $omail3[$x] = $row['omail3'];
                    $ofund3[$x] = $row['ofund3'];
                    $oorg3[$x] = $row['oorg3'];
                    $ocom3[$x] = $row['ocom3'];
                    $oname4[$x] = $row['oname4'];
                    $omail4[$x] = $row['omail4'];
                    $ofund4[$x] = $row['ofund4'];
                    $oorg4[$x] = $row['oorg4'];
                    $ocom4[$x] = $row['ocom4'];
                    
                    $mname0[$x] = $row['mname0'];
                    $mmail0[$x] = $row['mmail0'];
                    $mfund0[$x] = $row['mfund0'];
                    $morg0[$x] = $row['morg0'];
                    $mcom0[$x] = $row['mcom0'];
                    $mname1[$x] = $row['mname1'];
                    $mmail1[$x] = $row['mmail1'];
                    $mfund1[$x] = $row['mfund1'];
                    $morg1[$x] = $row['morg1'];
                    $mcom1[$x] = $row['mcom1'];
                    $mname2[$x] = $row['mname2'];
                    $mmail2[$x] = $row['mmail2'];
                    $mfund2[$x] = $row['mfund2'];
                    $morg2[$x] = $row['morg2'];
                    $mcom2[$x] = $row['mcom2'];
                    $mname3[$x] = $row['mname3'];
                    $mmail3[$x] = $row['mmail3'];
                    $mfund3[$x] = $row['mfund3'];
                    $morg3[$x] = $row['morg3'];
                    $mcom3[$x] = $row['mcom3'];
                    $mname4[$x] = $row['mname4'];
                    $mmail4[$x] = $row['mmail4'];
                    $mfund4[$x] = $row['mfund4'];
                    $morg4[$x] = $row['morg4'];
                    $mcom4[$x] = $row['mcom4'];
                    
                    $otname0[$x] = $row['otname0'];
                    $otmail0[$x] = $row['otmail0'];
                    $otfund0[$x] = $row['otfund0'];
                    $otorg0[$x] = $row['otorg0'];
                    $otcom0[$x] = $row['otcom0'];
                    $otname1[$x] = $row['otname1'];
                    $otmail1[$x] = $row['otmail1'];
                    $otfund1[$x] = $row['otfund1'];
                    $otorg1[$x] = $row['otorg1'];
                    $otcom1[$x] = $row['otcom1'];
                    $otname2[$x] = $row['otname2'];
                    $otmail2[$x] = $row['otmail2'];
                    $otfund2[$x] = $row['otfund2'];
                    $otorg2[$x] = $row['otorg2'];
                    $otcom2[$x] = $row['otcom2'];
                    $otname3[$x] = $row['otname3'];
                    $otmail3[$x] = $row['otmail3'];
                    $otfund3[$x] = $row['otfund3'];
                    $otorg3[$x] = $row['otorg3'];
                    $otcom3[$x] = $row['otcom3'];
                    $otname4[$x] = $row['otname4'];
                    $otmail4[$x] = $row['otmail4'];
                    $otfund4[$x] = $row['otfund4'];
                    $otorg4[$x] = $row['otorg4'];
                    $otcom4[$x] = $row['otcom4'];
                    
                    $ptotalfund[$x] = $row['ptotalfund'];
                    $ptotalorg[$x] = $row['ptotalorg'];
                    $ptotalcom[$x] = $row['ptotalcom'];
                    
                    $ototalfund[$x] = $row['ototalfund'];
                    $ototalorg[$x] = $row['ototalorg']; 
                    $ototalcom[$x] = $row['ototalcom'];
                    
                    $mtotalfund[$x] = $row['mtotalfund'];
                    $mtotalorg[$x] = $row['mtotalorg'];
                    $mtotalcom[$x] = $row['mtotalcom'];
                    
                    $ottotalfund[$x] = $row['ottotalfund'];
                    $ottotalorg[$x] = $row['ottotalorg'];
                    $ottotalcom[$x] = $row['ottotalcom'];
                    
                    $totalfund = $row['totalfund'];
                    $totalorg = $row['totalorg'];
                    $totalcom = $row['totalcom'];
                
                echo "<input type='hidden' name='budget_id[".$x."]' value='".$budget_id[$x]."'/>";
                echo '<!-- start of Budget Proposal -->';
                echo '
          
          <label class="control-label" style="font-weight:bold">PROPOSED BUDGET</label><br>';

         echo " <p>State the approximate or anticipated cost of the project. Please note that Simbahayan's policy is to make a contribution to your project, but not to provide 100% of the cost. Therefore, it is important that you record the extent of funding counterparts to the project. Please prepare one budget proposal per date of implementation.</p>";

          echo '  <div class="row clearfix">
              <div clas="col-md-12">
                <label class="control-label">1. Personnel</label>
                <table class="table table-bordered table-hover" id="personnel">
                  <thead>
                    <tr>
                      <th class="text-center">#</th>
                      <th class="text-center">Item</th>
                      <th class="text-center">Description (Quantity x Monetary Value)</th>
                      <th class="text-center">Community Service Fund</th>
                      <th class="text-center">Organization Counterpart</th>
                      <th class="text-center">Community Counterpart</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr id="per0">
                      <td>1</td>
                      <td><input maxlength ="25" type="text" name="pname0['.$x.']" placeholder="Item" class="form-control" value="'.$pname0[$x].'"/></td>
                      <td><input type="text" name="pmail0['.$x.']" placeholder="Description" class="form-control" value="'.$pmail0[$x].'"/></td>
                      <td><input type="number" name="pfund0['.$x.']" placeholder="CSF" class="form-control" value="'.$pfund0[$x].'"/></td>
                      <td><input type="number" name="porg0['.$x.']" placeholder="Organization Counterpart" class="form-control" value="'.$porg0[$x].'"/></td>
                      <td><input type="number" name="pcom0['.$x.']" placeholder="Community Counterpart" class="form-control" value="'.$pcom0[$x].'" /></td>
                    </tr>';
            echo '        <tr id="per1">
            <td>2</td>
                      <td><input type="text" name="pname1['.$x.']" placeholder="Item" class="form-control" value="'.$pname1[$x].'" /></td>
                      <td><input type="text" name="pmail1['.$x.']" placeholder="Description" class="form-control" value="'.$pmail1[$x].'" /></td>
                      <td><input type="number" name="pfund1['.$x.']" placeholder="CSF" class="form-control" value="'.$pfund1[$x].'"/></td>
                      <td><input type="number" name="porg1['.$x.']" placeholder="Organization Counterpart" class="form-control" value="'.$porg1[$x].'" /></td>
                      <td><input type="number" name="pcom1['.$x.']" placeholder="Community Counterpart" class="form-control" value="'.$pcom1[$x].'" /></td>
          </tr>';
          echo '<tr id="per2">
            <td>3</td>
                      <td><input type="text" name="pname2['.$x.']" placeholder="Item" class="form-control" value="'.$pname2[$x].'"/></td>
                      <td><input type="text" name="pmail2['.$x.']" placeholder="Description" class="form-control" value="'.$pmail2[$x].'"/></td>
                      <td><input type="number" name="pfund2['.$x.']" placeholder="CSF" class="form-control" value="'.$pfund2[$x].'"/></td>
                      <td><input type="number" name="porg2['.$x.']" placeholder="Organization Counterpart" class="form-control" value="'.$porg2[$x].'"/></td>
<td><input type="number" name="pcom2['.$x.']" placeholder="Community Counterpart" class="form-control" value="'.$pcom2[$x].'"/></td>
          </tr>';
          echo '<tr id="per3">
            <td>4</td>
                      <td><input type="text" name="pname3['.$x.']" placeholder="Item" class="form-control" value="'.$pname3[$x].'"/></td>
                      <td><input type="text" name="pmail3['.$x.']" placeholder="Description" class="form-control" value="'.$pmail3[$x].'"/></td>
                      <td><input type="number" name="pfund3['.$x.']" placeholder="CSF" class="form-control" value="'.$pfund3[$x].'"/></td>
                      <td><input type="number" name="porg3['.$x.']" placeholder="Organization Counterpart" class="form-control" value="'.$porg3[$x].'"/></td>
                      <td><input type="number" name="pcom3['.$x.']" placeholder="Community Counterpart" class="form-control" value="'.$pcom3[$x].'"/></td>
          </tr>';
          echo '<tr id="per4">
            <td>5</td>
                      <td><input type="text" name="pname4['.$x.']" placeholder="Item" class="form-control" value="'.$pname4[$x].'"/></td>
                      <td><input type="text" name="pmail4['.$x.']" placeholder="Description" class="form-control" value="'.$pmail4[$x].'"/></td>
                      <td><input type="number" name="pfund4['.$x.']" placeholder="CSF" class="form-control" value="'.$pfund4[$x].'"/></td>
                      <td><input type="number" name="porg4['.$x.']" placeholder="Organization Counterpart" class="form-control" value="'.$porg4[$x].'"/></td>
                      <td><input type="number" name="pcom4['.$x.']" placeholder="Community Counterpart" class="form-control" value="'.$pcom4[$x].'"/></td>
          </tr>
                  </tbody>
                </table>
              </div>
            </div>';


         echo '   <div class="row clearfix">
              <div clas="col-md-12">
                <table class="table table-bordered table-hover" id="operationslog">
                  <label class="control-label">2. Operations and Logistics </label>
                    <thead>
                      <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">Item</th>
                        <th class="text-center">Description (Quantity x Monetary Value)</th>
                        <th class="text-center">Community Service Fund</th>
                        <th class="text-center">Organization Counterpart</th>
                        <th class="text-center">Community Counterpart</th>
                      </tr>
                    </thead>
                    <tbody>
                    <tr id="opslog0">
                      <td>1</td>
                      <td><input type="text" name="oname0['.$x.']" placeholder="Item" class="form-control" value="'.$oname0[$x].'"/></td>
                      <td><input type="text" name="omail0['.$x.']" placeholder="Description" class="form-control" value="'.$omail0[$x].'"/></td>
                      <td><input type="number" name="ofund0['.$x.']" placeholder="CSF" class="form-control" value="'.$ofund0[$x].'"/></td>
                      <td><input type="number" name="oorg0['.$x.']" placeholder="Organization Counterpart" class="form-control" value="'.$oorg0[$x].'"/></td>
                      <td><input type="number" name="ocom0['.$x.']" placeholder="Community Counterpart" class="form-control" value="'.$ocom0[$x].'"/></td>
                    </tr>';
			echo '
                    <tr id="opslog1">
            <td>2</td>
                      <td><input type="text" name="oname1['.$x.']" placeholder="Item" class="form-control" value="'.$oname1[$x].'"/></td>
                      <td><input type="text" name="omail1['.$x.']" placeholder="Description" class="form-control" value="'.$omail1[$x].'"/></td>
                      <td><input type="number" name="ofund1['.$x.']" placeholder="CSF" class="form-control" value="'.$ofund1[$x].'"/></td>
                      <td><input type="number" name="oorg1['.$x.']" placeholder=
					  "Organization Counterpart" class="form-control" value="'.$oorg1[$x].'"/></td>
                      <td><input type="number" name="ocom1['.$x.']" placeholder="Community Counterpart" class="form-control" value="'.$ocom1[$x].'"/></td>
          </tr>
          <tr id="opslog2">
            <td>3</td>
                      <td><input type="text" name="oname2['.$x.']" placeholder="Item" class="form-control" value="'.$oname2[$x].'"/></td>
                      <td><input type="text" name="omail2['.$x.']" placeholder="Description" class="form-control" value="'.$omail2[$x].'"/></td>
                      <td><input type="number" name="ofund2['.$x.']" placeholder="CSF" class="form-control" value="'.$ofund2[$x].'"/></td>
                      <td><input type="number" name="oorg2['.$x.']" placeholder="Organization Counterpart" class="form-control" value="'.$oorg2[$x].'"/></td>
                      <td><input type="number" name="ocom2['.$x.']" placeholder="Community Counterpart" class="form-control" value="'.$ocom2[$x].'"/></td>
          </tr>
          <tr id="opslog3">
            <td>4</td>
                      <td><input type="text" name="oname3['.$x.']" placeholder="Item" class="form-control" value="'.$oname3[$x].'"/></td>
                      <td><input type="text" name="omail3['.$x.']" placeholder="Description" class="form-control" value="'.$omail3[$x].'"/></td>
                      <td><input type="number" name="ofund3['.$x.']" placeholder="CSF" class="form-control" value="'.$ofund3[$x].'"/></td>
                      <td><input type="number" name="oorg3['.$x.']" placeholder="Organization Counterpart" class="form-control" value="'.$oorg3[$x].'"/></td>
                      <td><input type="number" name="ocom3['.$x.']" placeholder="Community Counterpart" class="form-control" value="'.$ocom3[$x].'"/></td>
          </tr>
          <tr id="opslog4">
            <td>5</td>
                      <td><input type="text" name="oname4['.$x.']" placeholder="Item" class="form-control" value="'.$oname4[$x].'"/></td>
                      <td><input type="text" name="omail4['.$x.']" placeholder="Description" class="form-control" value="'.$omail4[$x].'"/></td>
                      <td><input type="number" name="ofund4['.$x.']" placeholder="CSF" class="form-control" value="'.$ofund4[$x].'"/></td>
                      <td><input type="number" name="oorg4['.$x.']" placeholder="Organization Counterpart" class="form-control" value="'.$oorg4[$x].'"/></td>
                      <td><input type="number" name="ocom4['.$x.']" placeholder="Community Counterpart" class="form-control" value="'.$ocom4[$x].'"/></td>
          </tr>
                  </tbody>
                  </table>
              </div>
            </div>';


         echo '   <div class="row clearfix">
              <div clas="col-md-12">
                <table class="table table-bordered table-hover" id="materials">
                  <label class="control-label">3. Materials and Supplies</label>
                    <thead>
                      <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">Item</th>
                        <th class="text-center">Description (Quantity x Monetary Value)</th>
                        <th class="text-center">Community Service Fund</th>
                        <th class="text-center">Organization Counterpart</th>
                        <th class="text-center">Community Counterpart</th>
                      </tr>
                    </thead>
                   <tbody>
                    <tr id="materials0">
                      <td>1</td>
                      <td><input type="text" name="mname0['.$x.']" placeholder="Item" class="form-control" value="'.$mname0[$x].'"/></td>
                      <td><input type="text" name="mmail0['.$x.']" placeholder="Description" class="form-control" value="'.$mmail0[$x].'"/></td>
                      <td><input type="number" name="mfund0['.$x.']" placeholder="CSF" class="form-control" value="'.$mfund0[$x].'"/></td>
                      <td><input type="number" name="morg0['.$x.']" placeholder="Organization Counterpart" class="form-control" value="'.$morg0[$x].'"/></td>
                      <td><input type="number" name="mcom0['.$x.']" placeholder="Community Counterpart" class="form-control" value="'.$mcom0[$x].'"/></td>
                    </tr>
                    <tr id="materials1">
            <td>2</td>
                      <td><input type="text" name="mname1['.$x.']" placeholder="Item" class="form-control" value="'.$mname1[$x].'"/></td>
                      <td><input type="text" name="mmail1['.$x.']" placeholder="Description" class="form-control" value="'.$mmail1[$x].'"/></td>
                      <td><input type="number" name="mfund1['.$x.']" placeholder="CSF" class="form-control" value="'.$mfund0[$x].'"/></td>
                      <td><input type="number" name="morg1['.$x.']" placeholder="Organization Counterpart" class="form-control" value="'.$morg1[$x].'"/></td>
                      <td><input type="number" name="mcom1['.$x.']" placeholder="Community Counterpart" class="form-control" value="'.$mcom1[$x].'"/></td>
          </tr>
          <tr id="materials2">
            <td>3</td>
                      <td><input type="text" name="mname2['.$x.']" placeholder="Item" class="form-control" value="'.$mname2[$x].'"/></td>
                      <td><input type="text" name="mmail2['.$x.']" placeholder="Description" class="form-control" value="'.$mmail2[$x].'"/></td>
                      <td><input type="number" name="mfund2['.$x.']" placeholder="CSF" class="form-control" value="'.$mfund2[$x].'"/></td>
                      <td><input type="number" name="morg2['.$x.']" placeholder="Organization Counterpart" class="form-control" value="'.$morg2[$x].'"/></td>
                      <td><input type="number" name="mcom2['.$x.']" placeholder="Community Counterpart" class="form-control" value="'.$mcom2[$x].'"/></td>
          </tr>
          <tr id="materials3">
            <td>4</td>
                      <td><input type="text" name="mname3['.$x.']" placeholder="Item" class="form-control" value="'.$mname3[$x].'"/></td>
                      <td><input type="text" name="mmail3['.$x.']" placeholder="Description" class="form-control" value="'.$mmail3[$x].'"/></td>
                      <td><input type="number" name="mfund3['.$x.']" placeholder="CSF" class="form-control" value="'.$mfund3[$x].'"/></td>
                      <td><input type="number" name="morg3['.$x.']" placeholder="Organization Counterpart" class="form-control" value="'.$morg3[$x].'"/></td>
                      <td><input type="number" name="mcom3['.$x.']" placeholder="Community Counterpart" class="form-control" value="'.$mcom3[$x].'"/></td>
          </tr>
          <tr id="materials4">
            <td>5</td>
                      <td><input type="text" name="mname4['.$x.']" placeholder="Item" class="form-control" value="'.$mname4[$x].'"/></td>
                      <td><input type="text" name="mmail4['.$x.']" placeholder="Description" class="form-control" value="'.$mmail4[$x].'"/></td>
                      <td><input type="number" name="mfund4['.$x.']" placeholder="CSF" class="form-control" value="'.$mfund4[$x].'"/></td>
                      <td><input type="number" name="morg4['.$x.']" placeholder="Organization Counterpart" class="form-control" value="'.$morg4[$x].'"/></td>
                      <td><input type="number" name="mcom4['.$x.']" placeholder="Community Counterpart" class="form-control" value="'.$mcom4[$x].'"/></td>
          </tr>
                  </tbody>
                  </table>
              </div>
            </div>';


         echo '   <div class="row clearfix">
              <div clas="col-md-12">
                <table class="table table-bordered table-hover" id="others">
                    <thead>
                    <label class="control-label">4. Others</label>
                      <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">Item</th>
                        <th class="text-center">Description (Quantity x Monetary Value)</th>
                        <th class="text-center">Community Service Fund</th>
                        <th class="text-center">Organization Counterpart</th>
                        <th class="text-center">Community Counterpart</th>
                      </tr>
                    </thead>
                    <tbody>
                    <tr id="others0">
                      <td>1</td>
                      <td><input type="text" name="otname0['.$x.']" placeholder="Item" class="form-control" value="'.$otname0[$x].'"/></td>
                      <td><input type="text" name="otmail0['.$x.']" placeholder="Description" class="form-control" value="'.$otmail0[$x].'"/></td>
                      <td><input type="number" name="otfund0['.$x.']" placeholder="CSF" class="form-control" value="'.$otfund0[$x].'"/></td>
                      <td><input type="number" name="otorg0['.$x.']" placeholder="Organization Counterpart" class="form-control" value="'.$otorg0[$x].'"/></td>
                      <td><input type="number" name="otcom0['.$x.']" placeholder="Community Counterpart" class="form-control" value="'.$otcom0[$x].'"/></td>
                    </tr>
                    <tr id="others1">
            <td>2</td>
                      <td><input type="text" name="otname1['.$x.']" placeholder="Item" class="form-control" value="'.$otname1[$x].'"/></td>
                      <td><input type="text" name="otmail1['.$x.']" placeholder="Description" class="form-control" value="'.$otmail1[$x].'"/></td>
                      <td><input type="number" name="otfund1['.$x.']" placeholder="CSF" class="form-control" value="'.$otfund1[$x].'"/></td>
                      <td><input type="number" name="otorg1['.$x.']" placeholder="Organization Counterpart" class="form-control" value="'.$otorg1[$x].'"/></td>
                      <td><input type="number" name="otcom1['.$x.']" placeholder="Community Counterpart" class="form-control" value="'.$otcom1[$x].'"/></td>
          </tr>
          <tr id="others2">
            <td>3</td>
                      <td><input type="text" name="otname2['.$x.']" placeholder="Item" class="form-control" value="'.$otname2[$x].'"/></td>
                      <td><input type="text" name="otmail2['.$x.']" placeholder="Description" class="form-control" value="'.$otmail2[$x].'"/></td>
                      <td><input type="number" name="otfund2['.$x.']" placeholder="CSF" class="form-control" value="'.$otfund2[$x].'"/></td>
                      <td><input type="number" name="otorg2['.$x.']" placeholder="Organization Counterpart" class="form-control" value="'.$otorg2[$x].'"/></td>
                      <td><input type="number" name="otcom2['.$x.']" placeholder="Community Counterpart" class="form-control" value="'.$otcom2[$x].'"/></td>
          </tr>
          <tr id="others3">
            <td>4</td>
                      <td><input type="text" name="otname3['.$x.']" placeholder="Item" class="form-control" value="'.$otname3[$x].'"/></td>
                      <td><input type="text" name="otmail3['.$x.']" placeholder="Description" class="form-control" value="'.$otmail3[$x].'"/></td>
                      <td><input type="number" name="otfund3['.$x.']" placeholder="CSF" class="form-control" value="'.$otfund3[$x].'"/></td>
                      <td><input type="number" name="otorg3['.$x.']" placeholder="Organization Counterpart" class="form-control"value="'.$otorg3[$x].'"/></td>
                      <td><input type="number" name="otcom3['.$x.']" placeholder="Community Counterpart" class="form-control" value="'.$otcom3[$x].'"/></td>
          </tr>
          <tr id="others4">
            <td>5</td>
                      <td><input type="text" name="otname4['.$x.']" placeholder="Item" class="form-control" value="'.$otname4[$x].'"/></td>
                      <td><input type="text" name="otmail4['.$x.']" placeholder="Description" class="form-control" value="'.$otmail4[$x].'"/></td>
                      <td><input type="number" name="otfund4['.$x.']" placeholder="CSF" class="form-control" value="'.$otfund4[$x].'"/></td>
                      <td><input type="number" name="otorg4['.$x.']" placeholder="Organization Counterpart" class="form-control" value="'.$otorg4[$x].'"/></td>
                      <td><input type="number" name="otcom4['.$x.']" placeholder="Community Counterpart" class="form-control" value="'.$otcom4[$x].'"/></td>
          </tr>
                  </tbody>
                  </table>
              </div>
            </div>';
            echo '<!-- end of budget proposal -->';
                }
                }

        
        echo "<div class='col-md-6'>
          <input class='btn btn-success sbmtBtn btn-lg pull-right' style = 'color: #fff; background-color: #23cf5f; border-radius: 0; margin-top: 30px;' type='submit' value='Submit'/> 
        </div>
     </form>";   
?>	 
                  
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