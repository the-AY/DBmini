<?php

    include "config.php";


    if(isset($_POST['submit'])) {

        
        //get the input details from ticketbooking
        $name = $_POST['name'];
        $c_id= $_POST['c_id'];
        $coach_type=$_POST['coach_type'];
        $src=$_POST['$src'];
        $dest=$_POST['$dest'];
        $ti_type="ticket";
        $pname1=$_POST['pname1'];
        $pname2=$_POST['pname2'];
        $age1=$_POST['age1'];
        $age2=$_POST['age2'];
        $address1=$_POST['address1'];
        $address2=$_POST['address2'];

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
            case "AC two tier":
                $coach_no= "2A101";
                break;
            case "second seater":
                $coach_no= "2S101";
                break;
            default : echo "invalid option";
            break;

            }

            //all the queries
            //inserting into ticket table
        $query="INSERT INTO TICKET(`NAME`,`C_ID`,`COACH_NO`,`SRC`,`DEST`) VALUES ('$name','$c_id','$coach_no','$src','$dest')";
            
        //inserting into ticket_holder table

        $query2="INSERT INTO TICKET_HOLDER(`TIH_NAME`,`AGE`,`ADDRESS`) VALUES ('$pname1','$age1','$address1')";
        $query3="INSERT INTO TICKET_HOLDER(`TIH_NAME`,`AGE`,`ADDRESS`) VALUES ('$pname2','$age2','$address2')";

        $run=mysqli_query($conn,$query) or die("connection failed");

        if($run) {
            echo "sucessfully inserted";
            
            
        }
        else {
            echo "unsuccessful";
            
        }
    }
?>
