<?php
require "conn.php";

$erno = $_POST["enrollmentnumber"];

$mysql_qry = "SELECT enrollmentnumber,subjectcode,facultycode,date FROM attendance_data WHERE enrollmentnumber='$erno';";

$dataArray = array();
$result = mysqli_query($conn, $mysql_qry);

$index = 0;
while($row = mysqli_fetch_assoc($result)){ // loop to store the data in an associative array.
     $dataArray[$index] = $row;
     $index++;
}echo json_encode($dataArray);

?>