<?php

include 'connection.php';

$name = $_POST['name'];
$phone = $_POST['phone']; 
$email = $_POST['email']; 
$querie = $_POST['querie'];



$sql = "INSERT  INTO  queries  VALUES (NULL,'$name','$phone','$email','$querie')";
$result = $conn->query($sql);
// if ($result === TRUE) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }
//redirect  
header('Location: ' . '../index.php');
