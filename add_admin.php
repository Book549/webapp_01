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
<form method="post" action="" enctype="file" <?php if($_SESSION['user_type'] != "3"){echo "hidden";}?>>
	<label>date</label>
	<input type="date" name="prob_date"><br>
	<label>time</label>
	<input type="time" name="prob_time"><br>
	<label>period</label>
	<input type="text" name="prob_period"><br>
	<label>prob_id_user</label>
	<input type="text" name="prob_id_user"><br>
	<label>event</label>
	<input type="text" name="prob_event"><br>
	<label>discript</label>
	<input type="text" name="prob_discription"><br>
	<label>pic</label><br>
	<input type="file" name="prob_pic"><br>
	<label>prob_result</label>
	<input type="" name="prob_result"><br>
	<label>prob_id_checker</label>
	<input type="text" name="prob_id_checker"><br>
	<label>prob_date_check</label>
	<input type="date" name="prob_date_check"><br>
	<label>prob_suggest</label>
	<input type="text" name="prob_suggest"><br>
	<input type="submit" name="">
</form>

<?php
if($_POST){
	//$prob_id = $_POST['prob_id'];
	$prob_date = $_POST['prob_date'];
	$prob_time = $_POST['prob_time'];
	$prob_period = $_POST['prob_period'];
	$prob_event = $_POST['prob_event'];
	$prob_discription = $_POST['prob_discription'];
	$prob_pic = $_POST['prob_pic'];
	$prob_id_user = $_POST['user_id'];
	$prob_result = $_POST['prob_result'];
	$prob_id_checker = $_POST['prob_id_checker'];
	$prob_date_check = $_POST['prob_date_check'];
	$prob_suggest = $_POST['prob_suggest'];
	
	$sql_insert_problem_user = "INSERT INTO `problem` (`prob_id`, `prob_date`, `prob_time`, `prob_period`, `prob_id_user`, `prob_event`, `prob_discription`, `prob_pic`, `prob_result`, `prob_id_checker`, `prob_date_check`, `prob_suggest`) VALUES (NULL, '$prob_date', '$prob_time', '$prob_period', '$prob_id_user', '$prob_event', '$prob_discription', '$prob_pic', $prob_result, $prob_id_checker, $prob_date_check, $prob_suggest)";
	$resuit_insert_problem_user = mysqli_query($conn, $sql_insert_problem_user);
	echo "X1";
	if ($resuit_insert_problem_user) {
		header("location: admin.php");
		echo "X2";
	}else{
		echo "X3";
	}
}
?>
</body>
</html>