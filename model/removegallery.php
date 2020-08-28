<?php

include 'connection.php';

$id = $_GET['id'];

$sql = "DELETE FROM photos WHERE gallery_id='$id'";
$sql = "DELETE FROM gallery WHERE id='$id'";
$result = $conn->query($sql);
//redirect  
header('Location: ' . '../dashboard/gallery.php');
