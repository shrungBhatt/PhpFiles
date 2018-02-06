<?php
require "conn.php";

$cuisines = $_POST["cuisines"];

$mysql_qry = "SELECT * FROM recipe_data WHERE cuisine='$cuisines'";



$dataArray = array();
$result = mysqli_query($conn, $mysql_qry);

$index = 0;
while($row = mysqli_fetch_assoc($result)){ // loop to store the data in an associative array.
     $dataArray[$index] = $row;
     $index++;
}echo json_encode($dataArray);
?>