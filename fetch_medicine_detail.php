<?php
require "conn.php";

$medicineName = $_POST["medicine_name"];
// $medicineName = "naproxen";

$mysql_qry = "SELECT * FROM medikit_medicine_details WHERE medicine_name='$medicineName'";


$dataArray = array();
$result = mysqli_query($conn, $mysql_qry);

$index = 0;
while($row = mysqli_fetch_assoc($result)){ // loop to store the data in an associative array.
     $dataArray[$index] = $row;
     $index++;
}
$finalArray = array("list" => $dataArray);

echo json_encode($finalArray);

?>