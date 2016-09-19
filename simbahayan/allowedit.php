<?php
include "mysql_connect.php";
session_start();
if(!isset($_SESSION['name'])){
	header("location: index.php");
}

$id = $_SESSION['user_id'];
$d = $_GET['d'];

$sqlselect="UPDATE proj_proposal SET edit = '1' WHERE proposal_id = '$d'";

	if(!mysqli_query($link, $sqlselect)){
		die("FAILED SUBMISSION");
	}
	
	echo "<script type='text/javascript'>alert('ALLOWED ORGANIZATION TO EDIT PROPOSAL'); window.location = 'signatory-viewproposal.php?d=".$d."';</script>";

	
?>