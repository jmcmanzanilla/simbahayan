<?php
include "mysql_connect.php";
session_start();
$org = $_SESSION['user_id'];
$col = $_SESSION['college'];
$days = $_GET['days'];
$signatory1 = "";
$proj_evaluation="";
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
	$proj_background1 = $_POST['proj_background1'];    // added proj_backround 1-3
	$proj_background2 = $_POST['proj_background2'];
	$proj_background3 = $_POST['proj_background3'];
	$gen_objective = $_POST['gen_objective'];
	$spec_obj1 = $_POST['spec_obj1'];
	$exp_result1 = $_POST['exp_result1'];
	$spec_obj2 = $_POST['spec_obj2'];
	$exp_result2 = $_POST['exp_result2'];
	$spec_obj3 = $_POST['spec_obj3'];
	$exp_result3 = $_POST['exp_result3'];
	$spec_obj4 = $_POST['spec_obj4'];					//added spec_obj4 & exp_result4
	$exp_result4 = $_POST['exp_result4'];
	$spec_obj5 = $_POST['spec_obj5'];					//added spec_obj5 & exp_result5
	$exp_result5 = $_POST['exp_result5'];
	$proj_evaluation = $_POST['proj_evaluation'];
	$proj_evaluation1 = $_POST['proj_evaluation1'];	//added proj_evaluation1
    
	
	$sqlinsert = "INSERT INTO proj_proposal (upload_date, lead_org, affiliation, college, lname1, fname1, mi1, cnum1, email1, lname2, fname2, mi2, cnum2, email2, collab, proj_title, prog_areadev, community, participants, comser_budget, org_budget, com_budget, proj_background, proj_background1, proj_background2, proj_background3, gen_objective, spec_obj1, exp_result1, spec_obj2, exp_result2, spec_obj3, exp_result3, spec_obj4, exp_result4, spec_obj5, exp_result5, proj_evaluation, proj_evaluation1, status, pending) VALUES (now(),'$lead_org', '$affiliation', '$college', '$lname1', '$fname1', '$mi1', '$cnum1', '$email1', '$lname2', '$fname2', '$mi2', '$cnum2', '$email2', '$collab', '$proj_title', '$prog_areadev', '$community', '$participants','$comser_budget', '$org_budget', '$com_budget', '$proj_background', '$proj_background1', '$proj_background2', '$proj_background3', '$gen_objective', '$spec_obj1', '$exp_result1', '$spec_obj2', '$exp_result2', '$spec_obj3', '$exp_result3', '$spec_obj4', '$exp_result4', '$spec_obj5', '$exp_result5', '$proj_evaluation', '$proj_evaluation1', 'Pending','User must complete other forms before approval begins' )";

	if(!mysqli_query($link, $sqlinsert)){
		die("<script type='text/javascript'>alert('FAILED SUBMISSION!'); window.history.go(-1);</script>");
	}
	echo "<script type='text/javascript'>alert('SUCCESSFULLY ADDED PROPOSAL'); window.location ='org-listproposal.php?page=1';</script>";

	 $sqlupdate ="UPDATE proj_proposal SET lead_org = '$lead_org', affiliation = '$affiliation', college = '$college', lname1 = '$lname1', fname1 = '$fname1', mi1 = '$mi1',  cnum1 = '$cnum1', email1 = '$email1', lname2 = '$lname2', fname2 = '$fname2', mi2 = '$mi2',  cnum2 = '$cnum2', email2 = '$email2', collab = '$collab', proj_title = '$proj_title', prog_areadev = '$prog_areadev', community = '$community', participants = '$participants', comser_budget = '$comser_budget', org_budget = '$org_budget', com_budget = '$com_budget', proj_background = '$proj_background', proj_background1 = '$proj_background1', proj_background2 = '$proj_background2', proj_background3 = '$proj_background3', gen_objective = '$gen_objective', spec_obj1 = '$spec_obj1', exp_result1 = '$exp_result1', spec_obj2 = '$spec_obj2', exp_result2 = '$exp_result2', spec_obj3 = '$spec_obj3', exp_result3 = '$exp_result3', spec_obj4 = '$spec_obj4', exp_result4 = '$exp_result4', spec_obj5 = '$spec_obj5', exp_result5 = '$exp_result5', proj_evaluation = '$proj_evaluation', proj_evaluation1 = '$proj_evaluation1' WHERE proposal_id = $d";
    
    if(!mysqli_query($link, $sqlupdate)){
		die("<script type='text/javascript'>alert('FAILED SUBMISSION!'); window.history.go(-1);</script>");
	}
	echo "<script type='text/javascript'>alert('SUCCESSFULLY ADDED PROPOSAL'); window.location ='org-listproposal.php?page=1';</script>";
	
}

mysqli_close($link);
?>