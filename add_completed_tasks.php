<?php
require "conn.php";

$startDate = $_POST["start_date"];
$endDate = $_POST["end_date"];
$taskHeader = $_POST["task_header"];
$taskContent = $_POST["task_content"];
$repCounter = $_POST["rep_counter"]


$mysql_qry = "insert into completed_task_data (start_date, end_date,task_header,task_content,rep_counter) values ('$startDate','$endDate','$taskHeader','$taskContent','$repCounter')";

if($conn->query($mysql_qry) === TRUE){
	echo "Added Completed task";
}else{
	echo "Error " . $mysql_qry . "<br>" . $conn->error;
}

?>