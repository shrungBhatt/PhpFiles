<?php
require "conn.php";

$username = $_POST["username"];
$email_id = $_POST["email_id"];
$password = $_POST["password"];
$gender = $_POST["gender"];
$phone_no  = $_POST["phone_no"];
$create_date = date('Y-m-d H:i:s');
$dob = $_POST["dob"];

$mysql_qry = "INSERT INTO photography_user_data
(user_name,
email_id,
password,
date_of_birth,
gender,
phone_no,
create_date)
VALUES 
('$username',
'$email_id',
'$password',
'$dob',
'$gender',
'$phone_no',
'$create_date')";

if($conn->query($mysql_qry) === TRUE){
    $result = "Insert Successful";
	echo json_encode(array("data" => array("result" => $result)));
}else{
    $result = $conn->error;
	echo json_encode(array("data" => array("result" => $result)));
}

?>