<?php
require "conn.php";

$photo_category = $_POST["photo_category"];
$photo_url = $_POST["photo_url"];
$create_date = date('Y-m-d H:i:s');


$mysql_qry = "INSERT INTO photography_photo_categories
(photo_category,
photo_url,
create_date) 
VALUES 
('$photo_category',
'$photo_url',
'$create_date')";

if($conn->query($mysql_qry) === TRUE){
    $result = "Insert Successful";
	echo json_encode(array("data" => array("result" => $result)));
}else{
    $result = $conn->error;
	echo json_encode(array("data" => array("result" => $result)));
}

?>