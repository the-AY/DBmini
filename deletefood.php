<?php
include 'config.php';
if(isset($_GET['CID'])){
    $CID=$_GET['CID'];
    $sql="DELETE FROM `customer` WHERE `CID`='$CID' AND `F_ID`=$F_ID";
    $result=mysqli_query($conn,$sql);
    if($result){
        header('location:adminfoodupdate.php');
        echo "<script>alert('deleted');</script>";
    }
    else{
        echo "<script>alert('Didn't delete');</script>";
        die(mysqli_error($connect));
    }
}
?>