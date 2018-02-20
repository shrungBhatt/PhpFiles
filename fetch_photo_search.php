<?php
require "conn.php";

$query = $_GET["query"];

$queryPartsArray = explode(',',$query);

$dataArray = array();


foreach($queryPartsArray as $queryPart){
    if($queryPart == ","){
        return;
    }
    $mysql_qry = "SELECT * FROM photography_photo_data WHERE (CONCAT(photo_name, photo_category) LIKE '%$queryPart%')";
    $result = mysqli_query($conn, $mysql_qry);
    
    while($row = mysqli_fetch_assoc($result)){ // loop to store the data in an associative array.
         $dataArray[] = $row;
    }
}

$dataArray = array_map("unserialize", array_unique(array_map("serialize", $dataArray)));//Used to remove the duplicate fields from the array.

$finalArray = array("data" => array("list" => $dataArray));

echo json_encode($finalArray);
?>

