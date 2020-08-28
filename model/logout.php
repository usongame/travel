<?php

include 'connection.php';


session_unset();
//redirect to login page 
header('Location: ' . '../dashboard/login.php');