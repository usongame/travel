<?php 
 
include 'connection.php'; 
$username = $_POST['username'];
$password = $_POST['password'];

//check if credential matches

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0){
    //correct credentials 
    $row = mysqli_fetch_array($result);
    // echo  $row['id'];
    // Start the session
    session_start();
    $_SESSION["user_id"] = $row['id'];
    $_SESSION["username"] = $row['username']; 
    //close session
    // session_destroy();

    //redirect  
    header('Location: ' . '../dashboard/index.php');
}else{  
    //incorrect credentials
    //redirect to login page 
    header('Location: ' . '../dashboard/login.php');
}

