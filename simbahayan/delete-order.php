<?php
include "mysql_connect.php";
session_start();

$d = $_GET['d'];
$r=$_GET['r'];

$delete = "DELETE FROM order_signatory WHERE signatory_id=".$r."";

if(!mysqli_query($link, $delete)){
	die("FAILED SUBMISSION");
}
echo "<script type='text/javascript'>alert('SUCCESSFULLY DELETED'); window.history.go(-1);</script>";

?>