<?php
require "conn.php";


$monument_id = 0;//$_POST["monumentId"];


switch($monument_id){
	case 0:
        $mysql_qry = "SELECT * FROM monument_1;";
	    break;
	case 1:
	    $mysql_qry = "SELECT * FROM monument_2;";
	    break;
	case 2:
	    $mysql_qry = "SELECT * FROM monument_3;";
	    break;
	default:
	    echo "Error";
}

$dataArray = array();
$result = mysqli_query($conn, $mysql_qry);

$index = 0;
while($row = mysqli_fetch_assoc($result)){ // loop to store the data in an associative array.
     $dataArray[$index] = $row;
     $index++;
}echo json_encode($dataArray);
?>