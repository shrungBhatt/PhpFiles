<?php
require "conn.php";

$erno = $_POST["enrollmentnumber"];	
$subject_code = $_POST["subject_code"];
$faculty_code = $_POST["faculty_code"];
$date = $_POST["date"];


$mysql_qry = "insert into attendance_data (enrollmentnumber, subjectcode, facultycode, date) values ('$erno','$subject_code','$faculty_code','$date')";

if($conn->query($mysql_qry) === TRUE){
	echo "Insert Successful";
}else{
	echo "Error " . $mysql_qry . "<br>" . $conn->error;
}

?>