<?php
require "conn.php";

$userName = $_GET["user_name"];
// $userName = "shrung";

$mysql_qry = "SELECT * FROM photography_saved_photo_data WHERE username='$userName';";



$dataArray = array();
$result = mysqli_query($conn, $mysql_qry);

$index = 0;
while($row = mysqli_fetch_assoc($result)){ // loop to store the data in an associative array.
     $dataArray[$index] = $row;
     $index++;
}
echo json_encode(array("data" => array("list" => $dataArray)));
?>