<?php

include 'connection.php';


// Start the session 
session_start();

if($_SESSION["user_id"] != null){

}else{
    // remove all session variables
    session_unset();
    //redirect to login page 
    header('Location: ' . '../dashboard/login.php');
}

//close session
// session_destroy();
  
