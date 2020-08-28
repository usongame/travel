<?php

include 'connection.php';
 
    $name = $_POST['name']; 

    
 

    $sql = "INSERT  INTO  gallery  VALUES (NULL,'$name')";
    $result = $conn->query($sql);
    // if ($result === TRUE) {
    //     echo "New record created successfully";
    // } else {
    //     echo "Error: " . $sql . "<br>" . $conn->error;
    // }
    //redirect  
    header('Location: ' . '../dashboard/gallery.php');

 

