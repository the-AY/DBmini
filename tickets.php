<?php

    include "config.php";

    session_start();
    $username = $_SESSION["username"];
    
    if(isset($_POST['submit'])) {

        
        //get the input details from ticketbooking
        $name = $_POST['name'];

   

        $coach_type=$_POST['coach_type'];

        $src=$_POST['src'];

        $dest=$_POST['dest'];

        $ti_type="TICKET";

        $pname1=$_POST['pname1'];

        $pname2=$_POST['pname2'];

        $age1=$_POST['age1'];

        $age2=$_POST['age2'];

        $address1=$_POST['address1'];

        $address2=$_POST['address2'];
        $price=0;

        //assign the coach type to its coach no
        $coach_no;

        switch ($coach_type) {

            case 1:
                $coach_no="SL101";
                break;
            case 2:
                $coach_no= "1A101";
                break;
            case 3:
                $coach_no= "CC101";
                break;
            case 4:
                $coach_no= "2S101";
                break;
            case 5:
                $coach_no= "2A101" ;
                break;
            default : echo "invalid option";
            break;

            }



<?php

include "config.php";

    session_start();
    $username = $_SESSION["username"];

    if(isset($_POST['submit'])) {

        $name=$_POST['name'];
        $username=