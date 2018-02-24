<?php
require "conn.php";

$query = $_POST["query"];
// $query = "Fever,";
$queryPartsArray = explode(',',$query);

$dataArray = array();


foreach($queryPartsArray as $queryPart){
    if($queryPart == ","){
        return;
    }
    $mysql_qry = "SELECT * FROM medikit_diseases WHERE disease_name LIKE '%$queryPart%'";
    $result = mysqli_query($conn, $mysql_qry);
    
    while($row = mysqli_fetch_assoc($result)){ // loop to store the data in an associative array.
         $dataArray[] = $row;
    }
}

$dataArray = array_map("unserialize", array_unique(array_map("serialize", $dataArray)));//Used to remove the duplicate fields from the array.

$finalArray = array("list" => $dataArray);

echo json_encode($finalArray);
?>