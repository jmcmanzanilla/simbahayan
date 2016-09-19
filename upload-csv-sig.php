<?php
include "mysql_connect.php";
session_start();

if(isset($_POST['submitted'])){
	
    
    $target = $_SERVER['DOCUMENT_ROOT'] . "/ustsimbahayan/uploads/";  
    $target_file = $target . basename( $_FILES['csv']['name']) ;  
    $file = $_FILES['csv']['name'];
    $file_path = mysqli_real_escape_string($link, $target_file);
	$file_path1 = "/ustsimbahayan/uploads/" .$file;
	
    if(move_uploaded_file($_FILES['csv']['tmp_name'], $target_file))  { 
	
    	define('CSV_PATH',$file_path1);

	$csv_file = $target . "signatoryprof.csv"; 
	$id = $_SESSION['user_id'];
	$college_code = $_SESSION['college'];

	if (($handle = fopen($csv_file, "r")) !== FALSE) {
	if(!filesize($csv_file)){echo "File is empty.\
	";exit;}
	
	fgets($handle);
	
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
		list($col1, $col2, $col3, $col4) = $data;
		$SQL[] = sprintf("INSERT into login_user (username, name, email, account_type, reference, password, college) VALUES ('$col1','$col2','$col3','$col4', '$id', md5('$college_code'), '$college_code')", $col1, $col2, $col3, $col4, $id, $college_code, $college_code);
    }

    fclose($handle);
}

foreach($SQL as $s){
   mysqli_query($link, $s);
}
	if($s){
		echo '<script>alert("Uploaded!");</script>';
   		 echo "<script>location.assign('add-user-sig.php')</script>";
	}
	else {
		echo "Failed.".mysqli_error($link);
		}
		

    }

}
?>
