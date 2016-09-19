<?php
session_start();
if(!isset($_SESSION['name'])){
	header("location: index.php");
}
include "mysql_connect.php";

$d = $_GET['d'];
$reason = $_GET['reason'];
$id = $_SESSION['user_id'];
$order_number = "";
$org = "";
$signatory_position = "";
$next_name="";
$sql="SELECT * FROM proj_proposal WHERE proposal_id = '$d'";
$result = mysqli_query($link, $sql);
					
while($row = mysqli_fetch_array($result)) {
	$org = $row['lead_org'];
	$signatory_position = $row['signatory_position'];
	}
$order = "SELECT order_number from order_signatory WHERE signatory_num='$id' AND org_num='$org'";
$ordering = mysqli_query($link, $order);
while($row = mysqli_fetch_array($ordering)) {
	$order_number = $row['order_number'];
	}
$order_number = $order_number+1;
$next = "SELECT signatory_num from order_signatory WHERE order_number = '$order_number'"; 
$nextt = mysqli_query($link, $next);
while($row = mysqli_fetch_array($nextt)) {
		$next_name = $row['signatory_num'];
	}
	
	$sqlinsert = "UPDATE proj_proposal SET status ='Rejected', signatory_position ='$id' WHERE proposal_id ='$d'";
    $sqlupdate = "INSERT INTO status_update (proposal_id, user_id, action, reason) VALUES ('$d', '$id', 'Rejected', '$reason')";
    if(!mysqli_query($link, $sqlupdate)){
		die("FAILED SUBMISSION");
	}
	
	if(!mysqli_query($link, $sqlinsert)){
		die("FAILED SUBMISSION");
	}
	
	echo "<script type='text/javascript'>alert('PROPOSAL REJECTED'); window.location = 'signatory-listproposal.php';</script>";

mysqli_close($link);
?>