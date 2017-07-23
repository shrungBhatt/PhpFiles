<?php
require "conn.php";

$user_name = $_POST["username"];

$mysql_qry = "SELECT enrollmentnumber,username FROM student_data WHERE username='$user_name';";

$result = mysqli_query($conn, $mysql_qry);

$row_cnt = mysqli_num_rows($result);

if($row_cnt > 0){
	$row = mysqli_fetch_assoc($result);
	$name = $row["enrollmentnumber"];
	echo $name;
} else{
	echo "Error " . $mysql_qry . "<br>" . $conn->error;
}

?>