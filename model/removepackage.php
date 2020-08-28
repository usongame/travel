<?php

include 'connection.php';

$id = $_GET['id'];

$sql = "DELETE FROM packages WHERE id='$id'";
$result = $conn->query($sql);
//redirect  
header('Location: ' . '../dashboard/index.php');