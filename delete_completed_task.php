<?php
require "conn.php";

$id = $_POST["id"];


$mysql_qry = "DELETE FROM task_data WHERE id='$id'";

if($conn->query($mysql_qry) === TRUE){
	echo "Task Deleted succesfully from the task_data table";
}else{
	echo "Error " . $mysql_qry . "<br>" . $conn->error;
}

?>