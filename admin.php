<!DOCTYPE html>
<html>
<head>
	<title>user_home</title>
</head>
<body>
	<?php 
	include("conn.php");
	$user_id = $_SESSION['user_id'];
	$user_type = $_SESSION['user_type'];
	$sql_find_prob = "SELECT * FROM `problem` WHERE `prob_id_user` = $user_id";
	$result_find_prob = mysqli_query($conn ,$sql_find_prob);
	if (mysqli_num_rows($result_find_prob) >= 1) {
		while($row_prob = mysqli_fetch_assoc($result_find_prob)){
			$prob_id = $row_prob['prob_id'];
			$prob_date = $row_prob['prob_date'];
			$prob_time = $row_prob['prob_time'];
			$prob_period = $row_prob['prob_period'];
			$prob_id_user = $row_prob['prob_id_user'];
			$prob_event = $row_prob['prob_event'];
			$prob_discription = $row_prob['prob_discription'];
			$prob_pic = $row_prob['prob_pic'];
			$prob_result = $row_prob['prob_result'];
			$prob_id_checker = $row_prob['prob_id_checker'];
			$prob_date_check = $row_prob['prob_date_check'];
			$prob_suggest = $row_prob['prob_suggest'];
		}
	}
	?>
	<table>
		<tr>
			<th></th>
		</tr>
	</table>
</body>
</html>