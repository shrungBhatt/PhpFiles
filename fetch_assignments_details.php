<?php
require "conn.php";

$id = $_POST["id"];


$mysql_qry = "SELECT id,details FROM assignment_data WHERE id='$id';";

$result = mysqli_query($conn, $mysql_qry);

$row_cnt = mysqli_num_rows($result);

if($row_cnt > 0){
	$row = mysqli_fetch_assoc($result);
	$details = $row["details"];
	echo $details;
} else{
	echo "Wrong Username or Password";
}

?>