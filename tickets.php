



<?php

include "config.php";
include "ticketbooking.php";

    session_start();
    $username = $_SESSION["username"];

    if(isset($_POST['submit'])) {

        $name=$_POST['name'];
        $coach_type=$_POST['coach_type'];
        $src=$_POST['src'];
        $dest=$_POST['dest'];
        $pname1=$_POST['pname1'];
        $pname2=$_POST['pname2'];
        $pname3=$_POST['pname3'];
        $age1=$_POST['age1'];
        $age2=$_POST['age2'];
        $age3=$_POST['age3'];
        $address1=$_POST['address1'];
        $address2=$_POST['address2'];
        $address3=$_POST['address3'];
        $doj=$_POST['doj'];
        $price=0;
        $ti_type="TICKET";



        $coach_no;

        switch ($coach_type) {

            case 1:
                $coach_no="SL101";
                $price= 450;
                break;
            case 2:
                $coach_no= "1A101";
                $price=2500;
                break;
            case 3:
                $coach_no= "CC101";
                $price=1000;
                break;
            case 4:
                $coach_no= "2S101";
                $price=200;
                break;
            case 5:
                $coach_no= "2A101" ;
                $price=2000;
                break;
            default : echo "invalid option";
            break;

            }

         //queries
    //insert into ticket table
    $query="INSERT INTO TICKET(`C_NAME`,`C_ID`,`TI_TYPE`,`SRC`,`DEST`,`COACH_NO`,`DOJ`) VALUES ('$name','$username','$ti_type','$src','$dest','$coach_no','$doj')";
    $query1="INSERT INTO TICKET_HOLDER(`TIH_NAME`,`AGE`,`ADDRESS`,`C_ID`) VALUES ('$pname1','$age1','$address1','$username')";
    $query2="INSERT INTO TICKET_HOLDER(`TIH_NAME`,`AGE`,`ADDRESS`,`C_ID`) VALUES ('$pname2','$age2','$address2','$username')";
    $query2="INSERT INTO TICKET_HOLDER(`TIH_NAME`,`AGE`,`ADDRESS`,`C_ID`) VALUES ('$pname3','$age3','$address3','$username')";

    $run=mysqli_query($conn,$query) or die("connection failed");
    $run1=mysqli_query($conn,$query1) or die("connection failed");
    $run2=mysqli_query($conn,$query2) or die("connection failed");



    if($run and $run1 and $run2) {
        // if($run)
        // {
        echo '<script>  alert("Your ticket has been successfully booked") </script>';  //not showing an alert box
        header('Refresh: 2; URL = home.html');
      
    }
    else {
        echo "unsuccessful";
        
    }
}