<?php
require "conn.php";

$mac_id = $_POST["mac_id"];
$user_name = $_POST["username"]; //funcion used to add slash before any wild card characters.
$user_pass = $_POST["password"];

$mysql_qry = "SELECT * FROM cook_book_user_data WHERE mac_id='$mac_id' AND user_name='$user_name' AND password='$user_pass'";

$result = mysqli_query($conn, $mysql_qry);


$row_cnt = mysqli_num_rows($result);

if($row_cnt > 0){
	echo "1";
} else{
	echo "Wrong Username or Password";
}

?>