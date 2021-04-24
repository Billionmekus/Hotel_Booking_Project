<?php
require_once 'includes/db_con.php';
include 'includes/functions.php';

if(isset($_POST['book'])){
    $name = $_POST['name'];
    $number = $_POST['number'];
    $number_of_persons = $_POST['number_of_persons'];
    $description = $_POST['description'];
    $duration = $_POST['duration'];
    $check_in = $_POST['check-in'];
    $check_out = $_POST['check-out'];

    // INSERT INTO DATABASE TABLE --- Start
    $sql = "INSERT INTO booking (name,phone_number,occupants,room_type,days,check_in,check_out)
    VALUES(?,?,?,?,?,?,?)";
    $stmt = mysqli_stmt_init($DBconnect);
    mysqli_stmt_prepare($stmt,$sql);
    mysqli_stmt_bind_param($stmt,'siisiss',
    $name,$number,$number_of_persons,$description,$duration,$check_in,$check_out);
    $exeute = mysqli_stmt_execute($stmt);

    if($exeute){

        $_SESSION['successInfo'] = 'booking is successfull';
        header('Location: booking.php');
    }
    // INSERT INTO DATABASE TABLE --- End
    
}
?>