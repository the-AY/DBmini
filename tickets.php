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

if(isset($_POST['submit'])) {




//assign the coach type to its coach no
$coach_no;

switch ($coach_type) {

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
$sql = "INSERT INTO TICKET(`C_ID`, `C_NAME`, `COACH_NO`, `SRC`, `DEST`)VALUES('c_id', 'name', 'coach_no', 'src', 'dest')";

if($conn->query($sql)==true) {
    $insert=true;

}
else{
    echo "ERROR: $sql <br> $conn->error";
}

// //insert into sql table
// $rs = mysqli_query($conn, $sql);


// if($rs) {
//     echo "Record inserted successfully";
// }
// else {
//     echo " unsuxessful";
// }
$conn->close();
}
else {
    echo "error";
}
?>

<?php

include "config.php";


if(isset($_POST['submit'])) {


    //get the input details from ticketbooking
    $name = $_POST['name'];
    $c_id= $_POST['c_id'];
    $coach_type=$_POST['coach_type'];
    $src=$_POST['$src'];
    $dest=$_POST['$dest'];
    //assign the coach type to its coach no
        $coach_no;

        switch ($coach_type) {

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
	$query="INSERT INTO FORM(`NAME`,`EMAIL`,`AGE`,`CONTACT`) VALUES ('$name','$email','$age','$contact')";

	$run=mysqli_query($conn,$query) or die("connection failed");

	if($run) {
		echo "sucessfully";
		
		
	}
	else {
		echo "unsuccessful";
		
	}
}
?>
