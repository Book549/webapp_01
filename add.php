<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php 
	include "conn.php";
	?>
<form method="post" action="" enctype="file">
	<label>date</label>
	<input type="date" name="prob_date"><br>
	<label>time</label>
	<input type="time" name="prob_time"><br>
	<label>period</label>
	<input type="text" name="prob_period"><br>
	<?php
	echo "prob_id_user<br>";
	?>
	<label>event</label>
	<input type="text" name="prob_event"><br>
	<label>discript</label>
	<input type="text" name="prob_discription"><br>
	<label>pic</label><br>
	<input type="file" name="prob_pic"><br>
	<input type="submit" name="">
</form>
<?php
if($_POST){
	$prob_id = $_POST['prob_id'];
	$prob_date = $_POST['prob_date'];
	$prob_time = $_POST['prob_time'];
	$prob_period = $_POST['prob_period'];
	$prob_id_user = $_SESSION['user_id'];
	$prob_event = $_POST['prob_event'];
	$prob_discription = $_POST['prob_discription'];
	$prob_pic = $_POST['prob_pic'];
	$sql_insert_problem_user = "INSERT INTO `problem` (`prob_id`, `prob_date`, `prob_time`, `prob_period`, `prob_id_user`, `prob_event`, `prob_discription`, `prob_pic`) VALUES (NULL, '$prob_date', '$prob_time', '$prob_period', '$prob_id_user', '$prob_event', '$prob_discription', '$prob_pic')";
	$resuit_insert_problem_user = mysqli_query($conn, $sql_insert_problem_user);
	if ($resuit_insert_problem_user) {
		header("location: user.php");
	}

}
?>
</body>
</html>