<?php
include "mysql_connect.php";
session_start();
$org = $_SESSION['user_id'];
$col = $_SESSION['college'];
$days = $_GET['days'];
$signatory1 = "";
if ($col == "nstp") {
    $sql = "SELECT * from order_signatory WHERE nstp = 1 AND order_number = 1";
    $result = mysqli_query($link, $sql);
    while($row = mysqli_fetch_array($result)) {
        $signatory1 = $row['signatory_num'];
	}
}
else {
$sql = "SELECT * from order_signatory WHERE org_num = '$org' AND order_number = 1";
$result = mysqli_query($link, $sql);
while($row = mysqli_fetch_array($result)) {
	$signatory1 = $row['signatory_num'];
	}
}
if(isset($_POST['submitted'])){

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

	$proj_title = $_POST['proj_title'];
	$prog_areadev = $_POST['prog_areadev'];
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
    
	
	$sqlinsert = "INSERT INTO proj_proposal (upload_date, lead_org, affiliation, college, lname1, fname1, mi1, cnum1, email1, lname2, fname2, mi2, cnum2, email2, collab, proj_title, prog_areadev, community, participants, comser_budget, org_budget, com_budget, proj_background, gen_objective, spec_obj1, exp_result1, spec_obj2, exp_result2, spec_obj3, exp_result3, status, pending) VALUES (now(),'$lead_org', '$affiliation', '$college', '$lname1', '$fname1', '$mi1', '$cnum1', '$email1', '$lname2', '$fname2', '$mi2', '$cnum2', '$email2', '$collab', '$proj_title', '$prog_areadev', '$community', '$participants','$comser_budget', '$org_budget', '$com_budget', '$proj_background', '$gen_objective', '$spec_obj1', '$exp_result1', '$spec_obj2', '$exp_result2', '$spec_obj3', '$exp_result3', 'Pending','User must complete other forms before approval begins' )";
	
    
	if(!mysqli_query($link, $sqlinsert)){
		die("<script type='text/javascript'>alert('FAILED SUBMISSION!'); window.history.go(-1);</script>");
	}

	echo "<script type='text/javascript'>alert('SUCCESSFULLY ADDED PROPOSAL'); window.location ='org-listproposal.php?page=1';</script>";
}
mysqli_close($link);
?>