<!DOCTYPE html>
<html>
<head>
	<title>user_home</title>
</head>
<body>
	<?php 
	include("conn.php");
	echo $_SESSION['user_id'];
	echo $_SESSION['user_type'];
	?>
</body>
</html>