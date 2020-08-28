<?php

include 'connection.php';



// $id = $_POST['id'];
$name = $_POST['name'];
$location = $_POST['location'];
$days = $_POST['days'];
$nights = $_POST['nights'];
$price = $_POST['price'];
$desc = $_POST['desc'];


//check for id
if (isset($_POST['id'])) {

    $id = $_POST['id'];
    // $sql = "SELECT * FROM packages WHERE id=$id ";
    // $result = $conn->query($sql);
    // $row = mysqli_fetch_array($result);
    echo $desc;
    $sql = "UPDATE packages  as a SET 
    a.desc = '$desc',
    a.name = '$name',
    a.location = '$location',
    a.days = $days,
    a.nights = $nights,
    a.price = $price 
     WHERE id = '$id' ";
    $result = $conn->query($sql);



    $target_dir = "../images/";
    if (is_uploaded_file($_FILES['image']['tmp_name'])) {
        //upload image  
        $image = basename($_FILES["image"]["name"]);
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_dir . $image);
        $sql2 = "UPDATE packages SET image = '$image' WHERE id = '$id'";
        $result = $conn->query($sql2);
    }
    if (is_uploaded_file($_FILES['image_1']['tmp_name'])) {

        //upload img_1   
        $img_1 =  basename($_FILES["image_1"]["name"]);
        move_uploaded_file($_FILES["image_1"]["tmp_name"], $target_dir . $img_1);
        $sql2 = "UPDATE packages SET img_1 = '$img_1' WHERE id = '$id'";
        $result = $conn->query($sql2);
    }

    if (is_uploaded_file($_FILES['image_2']['tmp_name'])) {
        //upload img_2  
        $img_2 =  basename($_FILES["image_2"]["name"]);
        move_uploaded_file($_FILES["image_2"]["tmp_name"], $target_dir . $img_2);
        $sql2 = "UPDATE packages SET img_2 = '$img_2' WHERE id = '$id'";
        $result = $conn->query($sql2);
    }

    if (is_uploaded_file($_FILES['image_3']['tmp_name'])) {

        //upload img_3  
        $img_3 = basename($_FILES["image_3"]["name"]);
        move_uploaded_file($_FILES["image_3"]["tmp_name"], $target_dir . $img_3);
        $sql2 = "UPDATE packages SET img_3 = '$img_3' WHERE id = '$id'";
        $result = $conn->query($sql2);
    }

    if (is_uploaded_file($_FILES['image_4']['tmp_name'])) {
        //upload img_4  
        $img_4 =  basename($_FILES["image_4"]["name"]);
        move_uploaded_file($_FILES["image_4"]["tmp_name"], $target_dir . $img_4);
        $sql2 = "UPDATE packages SET img_4 = '$img_4' WHERE id = '$id'";
        $result = $conn->query($sql2);
    }

    if (is_uploaded_file($_FILES['image_5']['tmp_name'])) { 
        //upload img_5  
        $img_5 =   basename($_FILES["image_5"]["name"]);
        move_uploaded_file($_FILES["image_5"]["tmp_name"], $target_dir . $img_5);
        $sql2 = "UPDATE packages SET img_5 = '$img_5' WHERE id = '$id'";
        $result = $conn->query($sql2);
    }

        if (is_uploaded_file($_FILES['image_6']['tmp_name'])) { 

        //upload img_6  
        $img_6 =   basename($_FILES["image_6"]["name"]);
        move_uploaded_file($_FILES["image_6"]["tmp_name"], $target_dir . $img_6);
        $sql2 = "UPDATE packages SET img_6 = '$img_6' WHERE id = '$id'";
        $result = $conn->query($sql2);
    }

    //redirect  
    header('Location: ' . '../dashboard/index.php');
}
