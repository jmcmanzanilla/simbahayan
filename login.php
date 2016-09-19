<?php
	
				
	include "mysql_connect.php";
	if(isset($_POST['login_user'])){

					
		$username = mysqli_real_escape_string($link,stripslashes($_POST['username']));
		$password = mysqli_real_escape_string($link,stripslashes($_POST['password']));
		
		
		$sqlquery = mysqli_query($link,"SELECT * FROM login_user WHERE username ='$username' AND password = md5('$password')");	
		$exists = mysqli_num_rows($sqlquery);
		$user = "";
		$pass = "";
		
		if($exists > 0)
		{
			while($row = mysqli_fetch_assoc($sqlquery))
			{
				$id = $row['user_id'];
				$user = $row['username'];
				$pass = $row['password'];
				$name = $row['name'];
				$account_type = $row['account_type'];
				$email = $row['email'];
				$college = $row['college'];

			}
			if(($username == $user) && (md5($password) == $pass))
			{
				session_start();
				$_SESSION['name']=$name;
				$_SESSION['username'] = $user;
				$_SESSION['user_id']=$id;
				$_SESSION['college'] = $college;
				$_SESSION['account_type'] = $account_type;
				$action = $user . " LOGGED IN.";
				$audit = "INSERT INTO audit_trail(user_id, datetime, action) VALUES ('$id', now(), '$action')";
    
				if(!mysqli_query($link, $audit)){
				die("ERROR");
				}
				
				if($account_type == 'Organization' || $account_type == "Facilitator"){
					header("location: org.php");						
					}
				else if($account_type == 'Signatory' || $account_type == "Moderator"){
					header("location: signatory.php");
				    }
					
				else if($account_type == 'Administrator'){
					header("location: admin.php");
				    }
				else{
					header("location: index.php");
				}
			}
		

		}
		else {
			echo '<script>alert("INVALID LOGIN!");</script>';
			echo "<script>location.assign('index.php')</script>";
		}
		
				
	}
				
?>