<?php
include "mysql_connect.php";
$d = $_GET['d'];
$sqlselect="SELECT terminal FROM proj_proposal where proposal_id = $d";
$results = mysqli_query($link, $sqlselect);
					
while($row = mysqli_fetch_array($results)) {
	$terminal = $row['terminal'];
	if ($terminal ==0) {
	echo "<script type='text/javascript'>alert('Terminal Report is not yet available.');window.location = 'org-viewproposal.php?d=".$d."';</script>";
	}
	}
					$sql="SELECT * FROM terminal where proposal_id='".$d."'";
					$result = mysqli_query($link,$sql);

					while($row = mysqli_fetch_array($result)) {
						$file_path = $row['file_path'];
						header('Content-type: application/pdf');
						header('Content-Transfer-Encoding: binary');
						header('Content-Length: ' . filesize($file_path));
						header('Accept-Ranges: bytes');

						@readfile($file_path);
					}
					
?>