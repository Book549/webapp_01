<!DOCTYPE html>
<html>
<head>
	<title>user_home</title>
</head>
<body>
	<a href="add.php">add</a>
	<?php 
	include("conn.php");
	$user_id = $_SESSION['user_id'];
	$user_type = $_SESSION['user_type'];
	?>
	<table border=5px>
		<tr>
			<th>prob_id</th>
			<th>prob_date</th>
			<th>prob_time</th>
			<th>prob_period</th>
			<th>prob_id_user</th>
			<th>prob_event</th>
			<th>prob_discription</th>
			<th>prob_pic</th>
			<th>prob_result</th>
			<th>prob_id_checker</th>
			<th>prob_date_check</th>
			<th>prob_suggest</th>
			<th>edit</th>
			<th>del</th>
		</tr>
	<?php
	$sql_find_prob = "SELECT * FROM `problem` WHERE `prob_id_user` = $user_id";
	$result_find_prob = mysqli_query($conn ,$sql_find_prob);
	if (mysqli_num_rows($result_find_prob) >= 1) {
		while($row_prob = mysqli_fetch_assoc($result_find_prob)){
			echo "<tr>";
			echo "<td>".$row_prob['prob_id']."</td>";
			echo "<td>".$row_prob['prob_date']."</td>";
			echo "<td>".$row_prob['prob_time']."</td>";
			echo "<td>".$row_prob['prob_period']."</td>";
			echo "<td>".$row_prob['prob_id_user']."</td>";
			echo "<td>".$row_prob['prob_event']."</td>";
			echo "<td>".$row_prob['prob_discription']."</td>";
			echo "<td>".$row_prob['prob_pic']."</td>";
			echo "<td>".$row_prob['prob_result']."</td>";
			echo "<td>".$row_prob['prob_id_checker']."</td>";
			echo "<td>".$row_prob['prob_date_check']."</td>";
			echo "<td>".$row_prob['prob_suggest']."</td>";
			echo "<td><a href=\"edit_user.php?id=".$row_prob['prob_id']."\">edit</a></td>";
			echo "<td><a href=\"del.php?id=".$row_prob['prob_id']."\">del</a></td>";
			echo "</tr>";
		}
	}
	?>
	</table>
</body>
</html>