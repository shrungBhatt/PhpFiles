<?php
require "conn.php";

$mac_id = $_POST["mac_id"];
$username = $_POST["username"];
$password = $_POST["password"];
$date = date('Y-m-d H:i:s');

$mysql_qry = "insert into cook_book_user_data (mac_id, user_name, password, date) values ('$mac_id','$username','$password','$date')";

if($conn->query($mysql_qry) === TRUE){
	echo "Insert SuccessFul";
}else{
	echo "Error " . $mysql_qry . "<br>" . $conn->error;
}

?>