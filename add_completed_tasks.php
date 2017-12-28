<?php
require "conn.php";

$startDate = $_POST["start_date"];
$endDate = $_POST["end_date"];
$taskHeader = $_POST["task_header"];
$taskContent = $_POST["task_content"];


$mysql_qry = "insert into completed_task_data (start_date, end_date,task_header,task_content) values ('$startDate','$endDate','$taskHeader','$taskContent')";

if($conn->query($mysql_qry) === TRUE){
	echo "Added Completed task";
}else{
	echo "Error " . $mysql_qry . "<br>" . $conn->error;
}

?>