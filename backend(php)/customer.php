<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "dbmini";


//create connection 
$conn= new mysqli($servername,$username,$password);

if ($conn->connect_error) {
    die("connection failed :". $conn->connect_error);
}

else {
    ECHO "CONNECT SUCCESSFULLY";
}
$conn->close();
?>