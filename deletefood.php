<?php
include 'config.php';
if(isset($_GET['CID'])){
    $CID=$_GET['CID'];
    $sql="DELETE FROM `customer` WHERE `CID`='$CID'";
    $result=mysqli_query($connect,$sql);
    if($result){
        header('location:fooddisplay.php');
    }
    else{
        echo "<script>alert('Didn't delete');</script>";
        die(mysqli_error($connect));
    }
}
?>