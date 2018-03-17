<?php
require "conn.php";

$userName = $_POST["user_name"];
$doctorName = $_POST["doctor_name"];
$appointmentStatusId = $_POST["appointment_status_id"];
$appointmentFrom = $_POST["appointment_from"];
$appointmentTo = $_POST["appointment_to"];
$appointmentDate = $_POST["appointment_date"];

$mySqlQry = "INSERT INTO medikit_appointment_details (user_name,doctor_name,appointment_status_id,appointment_from,appointment_to,appointment_date) 
VALUES 
('$userName','$doctorName','$appointmentStatusId','$appointmentFrom','$appointmentTo','$appointmentDate')";

if($conn->query($mySqlQry) === TRUE){
    echo "Booked Appointment";

}else{
    echo "Error " . $mySqlQry . "<br>" . $conn->error;
}

?>