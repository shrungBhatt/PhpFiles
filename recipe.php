<?php
require "conn.php";

$ingredient = "Bananas,Apple,Grapes";//$_POST["ingredient"];

$mysql_qry = "SELECT * FROM recipe_data WHERE ingredient LIKE '%$ingredient%';";

$dataArray = array();
$result = mysqli_query($conn, $mysql_qry);

$index = 0;
while($row = mysqli_fetch_assoc($result)){ // loop to store the data in an associative array.
     $dataArray[$index] = $row;
     $index++;
}echo json_encode($dataArray);



?>