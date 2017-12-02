<?php
require "conn.php";

$ingredient = "Bananas,Apple,Grapes";//$_POST["ingredient"];

$ingredientsArray = explode(',',$ingredient);

print_r($ingredientsArray);

foreach($ingredientsArray as $queryIngredient){
    $mysql_qry = "SELECT * FROM recipe_data WHERE ingredient LIKE '%$queryIngredient%'";
    $dataArray = array();
    $result = mysqli_query($conn, $mysql_qry);
    $index = 0;
    while($row = mysqli_fetch_assoc($result)){ // loop to store the data in an associative array.
         $dataArray[$index] = $row;
         $index++;
    }
}
 print_r($dataArray);



//echo json_encode($dataArray);



?>