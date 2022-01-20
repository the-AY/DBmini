

<?php

include "config.php";


if(isset($_POST['submit'])) {

    //get the details from postbooking.html

    $name=$_POST['name'];
    $c_id=$_POST['c_id'];
    $src=$_POST['src'];
    $dest=$_POST['dest'];
    $ti_type="POSTAL";
    

    //queries
    //insert into ticket table
    $query="INSERT INTO TICKET(`C_NAME`,`C_ID`,`TI_TYPE`,`SRC`,`DEST`) VALUES ('$name','$c_id','$ti_type','$src','$dest')";
    
    $run=mysqli_query($conn,$query) or die("connection failed");


    if($run) {
        echo "sucessfully inserted";
        
        
    }
    else {
        echo "unsuccessful";
        
    }
}
?>


