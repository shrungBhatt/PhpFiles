<?php
require "conn.php";
$mysql_qry = "SELECT * FROM rmc_db_table;";
$dataArray = array();
$result = mysqli_query($conn, $mysql_qry);
$index = 0;
while($row = mysqli_fetch_assoc($result)){ // loop to store the data in an associative array.
     $dataArray[$index] = $row;
     $index++;
}echo json_encode($dataArray);
?>
