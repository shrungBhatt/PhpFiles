<?php
require "conn.php";

$activityId = $_POST["activity_id"];
$activityLevel = $_POST["activity_level"];

$mysql_qry = "SELECT * FROM activity_points WHERE id='$activityId';";


$result = mysqli_query($conn, $mysql_qry);

$row_cnt = mysqli_num_rows($result);

if($row_cnt > 0){
	$row = mysqli_fetch_assoc($result);
	$points = $row[$activityLevel];
	echo $points;
}

?>
