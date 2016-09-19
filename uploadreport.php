<?php
include "mysql_connect.php";
session_start();

if(isset($_POST['submitted'])){
	
    $target = $_SERVER['DOCUMENT_ROOT'] . "/ust-simbahayan/uploads/";  
    $target_file = $target . basename( $_FILES['report']['name']) ;  
    $file = $_FILES['report']['name'];
    $file_path = mysqli_real_escape_string($link, $target_file);
	$file_path1 = "/ust-simbahayan/uploads/" .$file;
	
    if (move_uploaded_file($_FILES['report']['tmp_name'], $target_file))  { 
	
    	define('CSV_PATH',$file_path1);

	$csv_file = $target . "/reports.csv"; 

	if (($hand = fopen($csv_file, "r")) !== FALSE) {
	if(!filesize($csv_file)){echo "File is empty.\
	";exit;}
	
	fgets($hand);
	
    while (($data = fgetcsv($hand, 1000, ",")) !== FALSE) {
		list($col1, $col2, $col3, $col4, $col5, $col6, $col7, $col8, $col9, $col10, $col11, $col12, $col13, $col14, $col15, $col16) = $data;
		$SQL[] = sprintf("INSERT into report (date_received, lead_org, proj_title, proj_area, beneficiaries, date_target, budget_approved, budget_code, transaction_code, cr_code, student, faculty, admin, staff, alumni, remarks) VALUES ('$col1','$col2','$col3','$col4','$col5','$col6','$col7','$col8','$col9','$col10','$col11','$col12', '$col13','$col14','$col15','$col16')", $col1, $col2, $col3, $col4, $col5, $col6, $col7, $col8, $col9, $col10, $col11, $col12, $col13, $col14, $col15, $col16);
    }

    fclose($hand);
}

foreach($SQL as $j){
   mysqli_query($link, $j);
}
	if($j){
		echo '<script>alert("Uploaded!");</script>';
   		 echo "<script>location.assign('reports.php')</script>";
	}
	else {
		echo "Failed.".mysqli_error($link);
		}
		

    }

}
?>
