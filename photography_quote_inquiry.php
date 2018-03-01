<?php
require "conn.php";

$username = $_POST["username"];
$photo_name = $_POST["photo_name"];
$photo_url = $_POST["photo_url"];
$photo_description = $_POST["photo_description"];
$photo_tagged = $_POST["photo_tagged"];
$photo_likes = $_POST["photo_likes"];
$photo_category = $_POST["photo_category"];
$photo_author = $_POST["photo_author"];
$photo_date = $_POST["photo_date"];
$inquiry_message = $_POST["inquiry_message"];
$inquiry_date = $_POST["inquiry_date"];

$mysql_qry = "INSERT INTO photography_inquiry_data
(photo_name,
inquiry_message,
photo_url,
photo_description,
photo_tagged,
photo_likes,
photo_category,
photo_author,
inquiry_author,
photo_date,
inquiry_date) 
VALUES 
('$photo_name',
'$inquiry_message',
'$photo_url',
'$photo_description',
'$photo_tagged',
'$photo_likes',
'$photo_category',
'$photo_author',
'$username',
'$photo_date',
'$inquiry_date')";

if($conn->query($mysql_qry) === TRUE){
    $result = "Insert Successful";
	echo json_encode(array("data" => array("result" => $result)));
}else{
    $result = $conn->error;
	echo json_encode(array("data" => array("result" => $result)));
}

?>