<?php
require "conn.php";
$mysql_qry = "SELECT * FROM photography_photo_categories";

$dataArray = array();
$result = mysqli_query($conn, $mysql_qry);

$index = 0;
while($row = mysqli_fetch_assoc($result)){ // loop to store the data in an associative array.
     $dataArray[$index] = $row;
     $index++;
}
$finalArray = array("data" => array("list" => $dataArray));

echo json_encode($finalArray);
?>