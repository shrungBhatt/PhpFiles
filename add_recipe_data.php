<?php
require "conn.php";

$recipeName = $_POST["recipe"];
$ingredients = $_POST["ingredients"];
$category = $_POST["category"];
$cuisine = $_POST["cuisine"];
$overview = $_POST["overview"];
$rating = mt_rand(1,5);

if($rating != 5){
	$rating += 0.4;
}

$mysql_qry = "insert into recipe_data (recipe, ingredient, category, cuisine, overview,rating) values ('$recipeName','$ingredients','$category','$cuisine','$overview','$rating')";

if($conn->query($mysql_qry) === TRUE){
	echo "Insert SuccessFul";
}else{
	echo "Error " . $mysql_qry . "<br>" . $conn->error;
}

?>