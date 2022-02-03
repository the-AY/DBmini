

<?php

include "config.php";
session_start();
$username = $_SESSION["username"];

if(isset($_POST['submit'])) {

    //get the details from postbooking.html

    $name=$_POST['name'];
    $src=$_POST['src'];
    $dest=$_POST['dest'];
    $ti_type="POSTAL";
    $c_type=$_POST['c_type'];
    $price=0;

    switch($c_type)
    {
        case 1: $price=100;
        break;
        case 2: $price=5000;
        break;
        case 3: $price=10000;
        break;
        case 4: $price=1500;
        break;
        case 5: $price=2500;
        break;
        default: echo "error";
        break;
    }
    
    
    //queries
    //insert into ticket table
    $query="INSERT INTO TICKET(`C_NAME`,`C_ID`,`TI_TYPE`,`SRC`,`DEST`,`PRICE`) VALUES ('$name','$username','$ti_type','$src','$dest','$price')";
    
    $run=mysqli_query($conn,$query) or die("connection failed");


    if($run) {
        echo '<script>alert("Your Price is : '. $price.'")</script>';
        echo '<script> alert("Your Post has been successfully booked")</script>';  //not showing an alert box.
        header('Refresh: 1; URL = home.html');
      
    }
    else {
        echo "unsuccessful";
        
    }
}
?>


