<?php

include 'connection.php';

$name = $_POST['name'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$email = $_POST['email'];
$reservation_from = $_POST['reservation_from'];
$reservation_to = $_POST['reservation_to'];
$note = $_POST['note'];



$sql = "INSERT  INTO  vehiclebookings  VALUES (NULL,'$name','$phone','$address','$email','$reservation_from','$reservation_to','$note')";
$result = $conn->query($sql);
// if ($result === TRUE) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }
//redirect  
header('Location: ' . '../index.php');
