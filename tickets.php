



<?php

include "config.php";

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
        $coach_price=0;
        $ti_type="TICKET";
        $count1=0;
        $count2=0;
        $train=$_POST['train'];
        $doj=$_POST['doj'];
    
        $stations=array("(MAQ)MANGALURU CNTL","(SL)SURATHKAL","(MULK)MULKI","(UD)UDUPI","(KUDA)KUNDAPURA","(BYNR)MOOKAMBIKA ROAD","(BTJL)BHATKAL","(MRDW)MURDESHWAR","(HNA)HONNAVAR","(KT)KUMTA","(GOK)GOKARNA ROAD","(ANKL)ANKOLA","(KAWR)KARWAR","(MAO)MADGAON","(KUDL)KUDAL","(RN)RATNAGIRI","(CHI)CHIPLUN","(PNVL)PANVEL","(TNA)THANE","(LTT)LOKMANYATILAK T","(TVC)TRIVANDRUM CNTL","(QLN)KOLLAM JN","(ALLP)ALLEPPEY","(ERS)ERNAKULAM JN","(TCR)THRISUR","(SRR)SHORANUR JN","(CLT)KOZHIKKODE","(CAN)KANNUR","(KGQ)KASARAGOD","(MAJN)MANGALURU JN","(BSR)VASAI ROAD","(BRC)VADODARA JN","(KOTA)KOTA JN","(NZM)H NIZAMUDDIN","(VAK)VARKALASIVAGIRI","(KPY)KARUNAGAPALLI","(KYJ)KAYANKULAM JN","(HAD)HARIPPAD","(AMPA)AMBALAPPUZHA","(SRTL)CHERTHALA","(AWY)ALUVA","(KTU)KUTTIPPURAM","(TIR)TIRUR","(PGI)PARPANANGADI","(BDJ)VADAKARA","(KRMI)KARMALI","(KKW)KANKAVALI","(CSMT)C SHIVAJI MAH T","(PTB)PATTAMBI","(FK)FEROK","(QLD)QUILANDI","(TLY)THALASSERY","(PAZ)PAYANGADI","(NLE)NILESHWAR","(KZE)KANHANGAD");

        //to calculate price of the ticket ,only coach price
        
        $coach_no;

        switch ($coach_type) {

            case 1:
                $coach_no="SL101";
                $coach_price= 450;
                break;
            case 2:
                $coach_no= "1A101";
                $coach_price=2500;
                break;
            case 3:
                $coach_no= "CC101";
                $coach_price=1000;
                break;
            case 4:
                $coach_no= "2S101";
                $coach_price=200;
                break;
            case 5:
                $coach_no= "2A101" ;
                $coach_price=2000;
                break;
            default : echo "invalid option";
            break;

            }
            //for loops for calculating the price of stations and travelling
            //for loops gets the indexes of source and destination, which then is subtracted and then multipliedwith 50(fixed station price)
        for($i=0;$i<count($stations);$i++) {
            if($stations[$i]==$src or $stations[$i]==$dest){
                $count1=$i;
                break;
            }
        }
        for($i=count($stations);$i>=0;$i--) {
            if($stations[$i]==$src or $stations[$i]==$dest){
                $count2=$i;
                break;  
            }
        }
        
        //sets the toal price including coach and travel
        $tot_price=(($count2-$count1)*50)+$coach_price;





















         //queries
    //insert into ticket table
    $query="INSERT INTO TICKET(`C_NAME`,`C_ID`,`TI_TYPE`,`SRC`,`DEST`,`COACH_NO`,`PRICE`,`TRAIN`,`DOJ`) VALUES ('$name','$username','$ti_type','$src','$dest','$coach_no','$tot_price','$train','$doj')";
    $query1="INSERT INTO TICKET_HOLDER(`TIH_NAME`,`AGE`,`ADDRESS`,`C_ID`) VALUES ('$pname1','$age1','$address1','$username')";
    $query2="INSERT INTO TICKET_HOLDER(`TIH_NAME`,`AGE`,`ADDRESS`,`C_ID`) VALUES ('$pname2','$age2','$address2','$username')";
    $query3="INSERT INTO TICKET_HOLDER(`TIH_NAME`,`AGE`,`ADDRESS`,`C_ID`) VALUES ('$pname3','$age3','$address3','$username')";

    $run=mysqli_query($conn,$query) or die("connection failed");
    $run1=mysqli_query($conn,$query1) or die("connection failed");
    $run2=mysqli_query($conn,$query2) or die("connection failed");

         error_reporting(E_ERROR | E_PARSE);

    if($run and $run1 and $run2) {
        // if($run)
        // {
            echo '<script>alert("Your Price is : '. $tot_price.'")</script>';
        echo '<script>  alert("Your ticket has been successfully booked") </script>';  //not showing an alert box
        header('Refresh: 2; URL = home.html');
      
    }
    else {
        echo "unsuccessful";
        
    }
}