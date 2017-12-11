<?php
require "conn.php";

$ingredient = $_POST["ingredient"];

$ingredientsArray = explode(',',$ingredient);

$dataArray = array();


foreach($ingredientsArray as $queryIngredient){
    if($queryIngredient == ","){
        return;
    }
    $mysql_qry = "SELECT * FROM recipe_data WHERE ingredient LIKE '%$queryIngredient%'";
    $result = mysqli_query($conn, $mysql_qry);
    
    while($row = mysqli_fetch_assoc($result)){ // loop to store the data in an associative array.
         $dataArray[] = $row;
    }
}

$dataArray = array_map("unserialize", array_unique(array_map("serialize", $dataArray)));//Used to remove the duplicate fields from the array.


echo json_encode($dataArray);
?>