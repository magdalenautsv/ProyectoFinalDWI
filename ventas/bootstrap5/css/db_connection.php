<?php 

    // Connection variables 
    $host = "localhost:3306"; // MySQL host name eg. localhost
    $user = "root"; // MySQL user. eg. root ( if your on localserver)
    $password = "1234"; // MySQL user password  (if password is not set for your root user then keep it empty )
    $database = "Marsys"; // MySQL Database name

    // Connect to MySQL Database
    $con = new mysqli($host, $user, $password, $database);

    // Check connection
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }
?>