<?php
require "conn.php";

$erno = $_POST["enrollmentnumber"];
$username = $_POST["username"];
$fullname = $_POST["fullname"];
$password = $_POST["password"];
$email_id = $_POST["emailid"];
$dob = $_POST["dob"];

$mysql_qry = "insert into student_data (enrollmentnumber, username, fullname, password, emailid, dob) values ('$erno','$username','$fullname','$password','$email_id','$dob')";

if($conn->query($mysql_qry) === TRUE){
	echo "Insert SuccessFul";
}else{
	echo "Error " . $mysql_qry . "<br>" . $conn->error;
}

?>