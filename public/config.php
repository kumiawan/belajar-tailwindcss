<?php
#
#session_start();
#
#host default web server xampp or lampp | localhost or 127.0.0.1
$host = "localhost";
#username defult root
$username = "root";
#password defaul is empty
$password = "";
#your default database name on mysql
$database = "semada";

try {
    // create connection
    $con = new mysqli($host, $username, $password, $database);

    // check connection
    if ($con->connect_error) {
        throw new Exception("Connection Error : " . $con->connect_error);
    }

    // database connected
    echo "Connection Success!";

    #for shutdown database session
    #$con->close();
} catch (Exception $e) {

    echo "Found Error at :" . $e->getMessage();
}
