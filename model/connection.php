<?php

$servername = "mysql.xpni.cn";
$username = "root";
$password = "Xzqsyr20130926";
$db = "travel";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);
mysqli_set_charset($conn, 'utf8');

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
} 

