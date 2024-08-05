<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php
include("conn.php");
session_unset();
session_destroy();
header("location: index.php");
?>
</body>
</html>