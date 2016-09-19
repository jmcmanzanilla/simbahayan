<?php
session_start();
include "mysql_connect.php";
$id = $_SESSION['user_id'];
$user = $_SESSION['username'];
$action = $user . " LOGGED OUT.";
$audit = "INSERT INTO audit_trail(user_id, datetime, action) VALUES ('$id', now(), '$action')";
    
				if(!mysqli_query($link, $audit)){
				die("ERROR");
				}
header("location:index.php");
unset($_SESSION['name']);
session_destroy();
?>