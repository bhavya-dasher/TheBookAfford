<?php
 
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "1234";
    $dbname = "registration";

    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    if($conn->connect_errno)
    {
        die('Database connection failed');

    }
    
    echo "Database is successfully connected"; 
    ?>