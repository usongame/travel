<?php

include 'connection.php';

$id = $_GET['id'];

$sql = "DELETE FROM photos WHERE id='$id'"; 
$result = $conn->query($sql);
//redirect  
header('Location: ' . '../dashboard/gallery.php'); 