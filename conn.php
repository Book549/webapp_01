<?php
$db_server = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "report_sys";

$conn = mysqli_connect($db_server, $db_username, $db_password, $db_name);
if(!$conn){
	echo "some thing is worng";
}
session_start();
?>