<?php
require "conn.php";

$currentDate = $_POST["current_date"];


$mysql_qry = "SELECT * FROM task_data WHERE end_date='$currentDate'";

$result = mysqli_query($conn, $mysql_qry);

$index = 0;
while($row = mysqli_fetch_assoc($result)){ // loop to store the data in an associative array.
     $dataArray[$index] = $row;
     $index++;
}echo json_encode($dataArray);

?>