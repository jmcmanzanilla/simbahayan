<?php
session_start();
if(!isset($_SESSION['name'])){
	header("location: index.php");
}
include "mysql_connect.php";

$d = $_GET['d'];
$id = $_SESSION['user_id'];
$stat = "Pending";

// identify the specific project proposal to process and its current signatory stage

$sql="SELECT * FROM proj_proposal WHERE proposal_id = '$d'";
$result = mysqli_query($link, $sql);
while($row = mysqli_fetch_array($result)) {
	$org = $row['lead_org'];
	$signatory_position = $row['signatory_position'];
    $nstp = $row['affiliation'];
	}
	$affiliation = "";

// determine the identity of the current signatory and its order number
if ($affiliation ==  "None - NSTP") {
$order = "SELECT * from order_signatory WHERE signatory_num='$id' AND nstp = 1";
$ordering = mysqli_query($link, $order);
$value = mysqli_num_rows($ordering);
}
else {
$order = "SELECT * from order_signatory WHERE signatory_num = '$id' AND org_num = '$org'";
$ordering = mysqli_query($link, $order);
$value = mysqli_num_rows($ordering);
}
if ($value != 0) {
while($row = mysqli_fetch_array($ordering)) {
	$order_number = $row['order_number'];
	$reference = $row['reference'];
	$standard = $row['standard'];
	$simbahayan = $row['simbahayan'];
	$univwide = $row['univ_wide'];
	}	
	}
if ($value == 0) {
	$order = "SELECT * from order_signatory WHERE signatory_num='$id' AND org_num='0'";
	$ordering = mysqli_query($link, $order);
	while($row = mysqli_fetch_array($ordering)) {
		$order_number = $row['order_number'];
		$reference = $row['reference'];
		$standard = $row['standard'];
		$simbahayan = $row['simbahayan'];
		$univwide = $row['univ_wide'];
}
}
// go to the next order number
$order_number++;

// identify the signatory identity for the next order number
// for 1st, 2nd, 3rd (up to 4th signatory) that is not standard

if ($order_number <= 5 && $standard == 0 && $simbahayan == 0 && $univwide == 0) {
	$next = "SELECT * from order_signatory WHERE order_number = '$order_number' AND org_num ='$org'"; 
	$nextt = mysqli_query($link, $next);
	$x = mysqli_num_rows($nextt);
	if ($x > 0){
		while($row = mysqli_fetch_array($nextt)) {
			$next_name = $row['signatory_num'];
			$standard = $row['standard'];
			$simbahayan = $row['simbahayan'];
			$univwide = $row['univ_wide'];
		}
	}
	else if ($x == 0 ) {
		$next1 = "SELECT signatory_num from order_signatory WHERE order_number = 1 AND reference = '$reference' AND standard= 1 AND simbahayan = 0 AND univ_wide = 0"; 
		$nextt1 = mysqli_query($link, $next1);
		while($row = mysqli_fetch_array($nextt1)) {
			$next_name = $row['signatory_num'];
		}
	}	
	
}

else if ($order_number <= 4 && $standard == 0 && $simbahayan == 0 && $univwide == 1) {

	$next = "SELECT * from order_signatory WHERE order_number = '$order_number' AND univ_wide = 1 AND standard = 0"; 
	$nextt = mysqli_query($link, $next);
	$x = mysqli_num_rows($nextt);
	if ($x > 0){
		while($row = mysqli_fetch_array($nextt)) {
			$next_name = $row['signatory_num'];
			$standard = $row['standard'];
			$simbahayan = $row['simbahayan'];
			$univwide = $row['univ_wide'];
		}
	}
	else if ($x == 0 ) {
		$next1 = "SELECT signatory_num from order_signatory WHERE order_number = 1 AND standard= 1 AND univ_wide=1"; 
		$nextt1 = mysqli_query($link, $next1);
		while($row = mysqli_fetch_array($nextt1)) {
			$next_name = $row['signatory_num'];
		}
	}	
	
}

// for dean and regent (standard signatories) 
 
else if ($order_number <= 3 && $standard == 1 && $simbahayan == 0 && $univwide == 0) {
$next = "SELECT signatory_num from order_signatory WHERE order_number = '$order_number' AND reference = '$reference' AND standard = 1"; 
$nextt = mysqli_query($link, $next);
$num = mysqli_num_rows($nextt);
if ($num > 0){
while($row = mysqli_fetch_array($nextt)) {
		$next_name = $row['signatory_num'];
	}
}
if ($num == 0 ) {
	$order_number = 1;
	$standard = 1;
	$call = "SELECT signatory_num from order_signatory where order_number = '$order_number' AND simbahayan = 1 AND univ_wide = 0";
	$calli = mysqli_query($link, $call);
	while($row = mysqli_fetch_array($calli)) {
		$next_name = $row['signatory_num'];
	} 
}
}	

// for simbahayan signatories

else if ($order_number <= 4 && $standard == 1 && $univwide == 1 && $simbahayan == 1) {
	$call = "SELECT signatory_num from order_signatory where order_number = '$order_number' AND simbahayan = 1 AND standard = 1 AND univ_wide = 1";
	$calli = mysqli_query($link, $call);
	$x = mysqli_num_rows($calli);
	if ($x != 0) {
	while($row = mysqli_fetch_array($calli)) {
		$next_name = $row['signatory_num'];
		
	}
	} 
	else if ($x == 0){
	$next_name = "Complete";
	$sqlinsert1 = "UPDATE proj_proposal SET status='Approved' WHERE proposal_id = $d";
		
			$query = "SELECT lead_org, proj_title, community, participants, upload_date, target_id, proposal_id FROM proj_proposal WHERE proposal_id = $d";
            $result = mysqli_query($link, $query);
            while($row = mysqli_fetch_array($result)) {
                $lead_org = $row['lead_org'];
                $date = $row['upload_date'];
                $date_target = $row['target_date'];
                $proj_title = $row['proj_title'];
                $proj_area = $row['community'];
                $beneficiaries = $row['participants'];
            }
            $query = "SELECT name FROM login_user WHERE user_id = $d";
            $result = mysqli_query($link, $query);
            while($row = mysqli_fetch_array($result)) {
                $name = $row['name'];
            }
	$reporting = "INSERT INTO report (proposal_id, date_received, lead_org, proj_title, proj_area, beneficiaries, date_target) VALUES ('$d', '$date', '$name', '$proj_title', '$proj_area', '$beneficiaries', '$date_target')";
	
	if(!mysqli_query($link, $reporting) AND !mysqli_query($link, $sqlinsert1) ){
		die("<script type='text/javascript'>alert('UNABLE TO SUBMIT PROPOSAL!!!!'); window.history.go(-1);</script>");
	}
	
		}
	}
else if ($order_number <= 4 && $standard == 1 && $univwide == 0) {
	$call = "SELECT signatory_num from order_signatory where order_number = '$order_number' AND simbahayan = 1 AND standard = 1";
	$calli = mysqli_query($link, $call);
	$x = mysqli_num_rows($calli);
		if ($x != 0) {
		while($row = mysqli_fetch_array($calli)) {
			$next_name = $row['signatory_num'];
			}
		} 
		else if ($x == 0){
			$next_name = "Complete";
			$stat = "Approved";
		
			$query = "SELECT lead_org, proj_title, community, participants, upload_date, target_id, proposal_id FROM proj_proposal WHERE proposal_id = $d";
            $result = mysqli_query($link, $query);
            while($row = mysqli_fetch_array($result)) {
                $lead_org = $row['lead_org'];
                $date = $row['upload_date'];
                $target_date = $row['target_date'];
                $proj_title = $row['proj_title'];
                $proj_area = $row['community'];
                $beneficiaries = $row['participants'];
            }
            $query = "SELECT name FROM login_user WHERE user_id = $d";
            $result = mysqli_query($link, $query);
            while($row = mysqli_fetch_array($result)) {
                $name = $row['name'];
            }
			
			$date ="";
			$proj_title = "";
			$proj_area = "";
			$beneficiaries = "";
			$target_date = "";
			$name = "";
			
	$reporting = "INSERT INTO report (proposal_id, date_received, lead_org, proj_title, proj_area, beneficiaries, date_target) VALUES ('$d', '$date', '$name', '$proj_title', '$proj_area', '$beneficiaries', '$target_date')";
	
	if(!mysqli_query($link, $reporting)){
		die("<script type='text/javascript'>alert('UNABLE TO SUBMIT PROPOSAL!!!!'); window.history.go(-1);</script>");
	}
	
		}
}

$sqlinsert = "UPDATE proj_proposal SET signatory_position = '$signatory_position' , pending = '$next_name' , status = '$stat' WHERE proposal_id = $d";
$sqlupdate = "INSERT INTO status_update (proposal_id, user_id, action) VALUES ('$d', '$id', 'Approved')";
    if(!mysqli_query($link, $sqlupdate)){
		die("FAILED SUBMISSION");
	}
	if(!mysqli_query($link, $sqlinsert)){
		die("FAILED SUBMISSION");
	}
	
	echo "<script type='text/javascript'>alert('PROPOSAL APPROVED'); window.location = 'email.php? person=$next_name';</script>";
?>