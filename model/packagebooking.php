<?php 
 
include 'connection.php'; 

$package_name = $_POST['package_name'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$email = $_POST['email'];
$participants = $_POST['participants'];
$reservation_date = $_POST['reservation_date'];

 
$sql = "INSERT  INTO  packagebookings  VALUES (NULL,'$package_name','$name','$phone','$address','$email','$participants','$reservation_date')";
$result = $conn->query($sql);
// if ($result === TRUE) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }
//redirect  
header('Location: ' . '../index.php');