<?php
require "conn.php";

$monument_id = 0;//$_POST["monumentId"];
$rfid_cnt = 123;//$_POST["rfidCnt"];
$pir_result = 454;//$_POST["pirResult"];
$qr_cnt = 234;//$_POST["qrCnt"];
$date_time = date("Y-m-d");//$_POST["dateTime"];

//Suppose there are 3 monuments
//m1= 0 id ,m2 = 1 id ,m3 = 2 id;

switch($monument_id){
	case 0:
	$mysql_qry = "insert into monument_1 (date_time_hours, rfid_count, pir_result, qr_count) values ('$date_time','$rfid_cnt','$pir_result','$qr_cnt')";
	break;
	case 1:
    $mysql_qry = "insert into monument_2 (date_time_hours, rfid_count, pir_result, qr_count) values ('$date_time','$rfid_cnt','$pir_result','$qr_cnt')";
	break;
	case 2;
	$mysql_qry = "insert into monument_3 (date_time_hours, rfid_count, pir_result, qr_count) values ('$date_time','$rfid_cnt','$pir_result','$qr_cnt')";
    break;
	default:
    echo "No such monument exists";
}

if($conn->query($mysql_qry) === TRUE){
	echo "Insert SuccessFul";
}else{
	echo "Error " . $mysql_qry . "<br>" . $conn->error;
}

?>