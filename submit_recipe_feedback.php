<?php
require "conn.php";

$mac_id = $_POST["mac_id"];
$username = $_POST["username"];
$recipe_name = $_POST["recipe_name"];
$review = $_POST["review"];
$rating = $_POST["rating"];
$date = date('Y-m-d H:i:s');


$mysql_qry = "INSERT INTO recipe_feed_back_data (mac_id, username, recipe_name, review, rating, date)
 values ('$mac_id','$username','$recipe_name','$review','$rating','$date')";

if($conn->query($mysql_qry) === TRUE){
	echo "1";
}else{
	echo "Error " . $mysql_qry . "<br>" . $conn->error;
}

?>