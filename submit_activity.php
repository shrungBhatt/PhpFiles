<?php
require "conn.php";

$erno = $_POST["enrollmentnumber"];
$activityName = $_POST["activity_name"];
$subActivity = $_POST["sub_activity"];
$activityLevel = $_POST["activity_level"];
$date = $_POST["activity_date"];
$activityPoints = $_POST["activity_points"];
$activityDescription = $_POST["activity_description"];

$mysql_qry = "insert into activity_data (enrollmentnumber, activity_name, sub_activity, activity_level,activity_description, activity_points,activity_date)
 values ('$erno','$activityName','$subActivity','$activityLevel','$activityDescription','$activityPoints','$date')";

if($conn->query($mysql_qry) === TRUE){
	echo "Insert SuccessFul";
}else{
	echo "Error " . $mysql_qry . "<br>" . $conn->error;
}

?>