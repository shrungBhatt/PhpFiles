<?php 
require "conn.php";

$id = $_POST["id"];
$endDate = $_POST["end_date"];
$repCounter = $_POST["rep_counter"];

$mysql_qry = "UPDATE task_data 
                SET end_date = '$endDate',rep_counter = '$repCounter'
                WHERE id='$id'";

if($conn->query($mysql_qry) === TRUE){
	echo "Insert SuccessFul";
}else{
	echo "Error " . $mysql_qry . "<br>" . $conn->error;
}

?>