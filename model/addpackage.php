<?php

include 'connection.php';

 

    $name = $_POST['name'];
    $location = $_POST['location'];
    $days = $_POST['days'];
    $nights = $_POST['nights']; 
    $price = $_POST['price'];
    $desc = $_POST['desc']; 

    //TODO: function can be used
    //upload image  
    $target_dir = "../images/";
    $image = basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"],$target_dir . $image);

    //upload img_1  
    $img_1 =   basename($_FILES["image_1"]["name"]);
    move_uploaded_file($_FILES["image_1"]["tmp_name"],$target_dir . $img_1);
    //upload img_2  
    $img_2 =  basename($_FILES["image_2"]["name"]);
    move_uploaded_file($_FILES["image_2"]["tmp_name"],$target_dir . $img_2);
    //upload img_3  
    $img_3 = basename($_FILES["image_3"]["name"]);
    move_uploaded_file($_FILES["image_3"]["tmp_name"],$target_dir . $img_3);
    //upload img_4  
    $img_4 =  basename($_FILES["image_4"]["name"]);
    move_uploaded_file($_FILES["image_4"]["tmp_name"],$target_dir . $img_4);
    //upload img_5  
    $img_5 =   basename($_FILES["image_5"]["name"]);
    move_uploaded_file($_FILES["image_5"]["tmp_name"],$target_dir . $img_5);
    //upload img_6  
    $img_6 =   basename($_FILES["image_6"]["name"]);
    move_uploaded_file($_FILES["image_6"]["tmp_name"],$target_dir . $img_6);

    $sql = "INSERT  INTO  packages  VALUES (NULL,'$name','$location','$days','$nights','$image','$price','$desc','$img_1','$img_2','$img_3','$img_4','$img_5','$img_6')";
    $result = $conn->query($sql);
    // if ($result === TRUE) {
    //     echo "New record created successfully";
    // } else {
    //     echo "Error: " . $sql . "<br>" . $conn->error;
    // }
    //redirect  
    header('Location: ' . '../dashboard/index.php');

 

