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

//get the input details from ticketbooking
$name = $_POST['name'];
$c_id= $_POST['c_id'];
$coach_type=$_POST['coach_type'];
$src=['$src'];
$dest=['$dest'];

//assign the coach type to its coach no
$coach_no;

switch ($coach_no) {

    case "sleeper":
        $coach_no="SL101";
        break;
    case "first class":
        $coach_no= "1A101";
        break;
    case "AC chair car":
        $coach_no= "CC101";
        break;
    case "second seater":
        $coach_no= "2S101";
        break;
    case "AC two tier":
        $coach_no= "2A101";
        break;
    case "second seater":
        $coach_no= "2S101";
        break;

}

//insert into sql code
$insert = "INSERT INTO `TICKET` (`C_ID`, `C_NAME`, `COACH_NO`, `SRC`, `DEST`) VALUES ('c_id', 'name', 'coach_no', 'src', 'dest')";

//insert into sql table
$rs =mysqli_query($conn, $insert);


if($rs) {
    echo "Record inserted successfully";
}

$conn->close();
?>