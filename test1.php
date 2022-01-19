<?php
$insert=false;

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "dbmini";


//create connection 
$conn=mysqli_connect($servername,$username,$password,$dbname);

if ($conn->connect_error) {
    die("connection failed :". $conn->connect_error);
}


    ECHO "CONNECT SUCCESSFULLY";

    $sql = "INSERT INTO `TICKET`(`C_ID`, `C_NAME`, `COACH_NO`, `SRC`, `DEST`)VALUES('c102', 'abc', 'ac101', 'banga', 'manga')";

    //insert into sql table
$rs = mysqli_query($conn, $sql);


if($rs) {
    echo "Record inserted successfully";
}
else {
    echo " unsucessful because of this error";
    mysqli_error($conn);
}
$conn->close();

?>