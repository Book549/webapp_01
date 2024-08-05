<?php include("conn.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<form method="post" action="">
	<label for="username">username:</label>
	<input type="text" name="username" id="username"><br>
	<label for="password">password</label>
	<input type="text" name="password" id="password"><br>
	<input type="submit" name="login">
</form>
<?php
if ($_POST) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$sql_login = "SELECT * FROM users WHERE user_username = '$username' AND user_password = '$password'";
	$result_login_user = mysqli_query($conn ,$sql_login);
	if (mysqli_num_rows($result_login_user) >= 1) {
		while ($row_login = mysqli_fetch_assoc($result_login_user)) {
			$_SESSION['user_id'] = $row_login['user_id'];
			$_SESSION['user_type'] = $row_login['user_type'];
		}
	}else{
		echo "some thing is woring";
	}
	switch ($_SESSION['user_type']) {
		case '1':
			header("location: user.php");
			break;

		case '2':
			# code...
			break;
		
		case '3':
			header("location: admin.php");
			break;

		default:
			# code...
			break;
	}
}
?>
</body>
</html>
