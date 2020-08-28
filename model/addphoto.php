<?php

include 'connection.php';

$gallery_id = $_POST['gallery_id'];
//upload image  
$target_dir = "../images/gallery/";
$image = basename($_FILES["image"]["name"]);
move_uploaded_file($_FILES["image"]["tmp_name"], $target_dir . $image);


$sql = "INSERT  INTO  photos  VALUES (NULL,'$gallery_id','$image')";
$result = $conn->query($sql); 
//  if ($result === TRUE) {
//         echo "New record created successfully";
//     } else {
//         echo "Error: " . $sql . "<br>" . $conn->error;
//     }
//redirect  
header('Location: ' . '../dashboard/viewgallery.php?id='. $gallery_id);
