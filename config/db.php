<?php 

    // Enable us to use Headers
    ob_start();

    // Set sessions
    if(!isset($_SESSION)) {
        session_start();
    }

    $hostname = "127.0.0.1:51749";
    $username = "azure";
    $password = "6#vWHD_$";
    $dbname = "your_database_name";
    
    $connection = mysqli_connect($hostname, $username, $password, $dbname) or die("Database connection not established.")

?>