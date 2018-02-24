<?php
require "conn.php";

$category = $_GET["category"];


$mysql_qry = "SELECT * FROM photography_photo_data WHERE photo_category='$category'";



$dataArray = array();
$result = mysqli_query($conn, $mysql_qry);

$index = 0;
while($row = mysqli_fetch_assoc($result)){ // loop to store the data in an associative array.
     $dataArray[$index] = $row;
     $index++;
}
echo json_encode(array("data" => array("list" => $dataArray)));
?>