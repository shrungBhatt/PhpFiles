<?php
require "conn.php";

$query = $_POST["query"];

$mysql_qry = "SELECT speciality_image_url FROM medikit_speciality_images WHERE speciality_name='$query'";

$dataArray = array();
$result = mysqli_query($conn, $mysql_qry);

$index = 0;
while($row = mysqli_fetch_assoc($result)){ // loop to store the data in an associative array.
     $dataArray[$index] = $row;
     $index++;
}echo json_encode($dataArray);
?>