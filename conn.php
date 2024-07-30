<?php
$db_server = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "t1";

$result_connect_server = mysqli_connect($db_server, $db_username, $db_password, $db_name);
if(!$result_connect_server){
	echo "some thing is worng";
}
session_start();
?>