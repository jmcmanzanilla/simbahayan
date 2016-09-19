<?php

	$db_host = "localhost"; 
	$db_username = "root"; 
	$db_password = "admin123"; 
	$db_name = "iics2016_simbahayan";
	
	$link = mysqli_connect($db_host,$db_username,$db_password,$db_name);
	
		if(!$link){
			die("ERROR : Could not connect." . mysqli_connect_error());
		}
		
	$db = mysqli_select_db($link,$db_name);
		
		if(!$db){
			die("Cannot select database!");
		}
					
	//echo "Successful Connection!";

?>