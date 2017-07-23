<?php
require "conn.php";

$user_name = $_POST["username"];
$user_pass = $_POST["password"];

$mysql_qry = "SELECT * FROM student_data WHERE username='$user_name' AND password='$user_pass';";

$result = mysqli_query($conn, $mysql_qry);

$row_cnt = mysqli_num_rows($result);

if($row_cnt > 0){
	$row = mysqli_fetch_assoc($result);
	$erno = $row["enrollmentnumber"];
	echo $erno;
} else{
	echo "Wrong Username or Password";
}

?>