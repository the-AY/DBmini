<?php
include 'config.php';
include 'admin_foodbook.php';
if(isset($_GET['C_ID'])){
    // $C_ID=$_GET['username'];
    $user=$_GET['C_ID'];
    
    $sql4="DELETE FROM `food` WHERE `C_ID`='$user' ";
    $result=mysqli_query($conn,$sql4);
    if($result){
        header('location:adminfoodupdate.php');
        echo "<script>alert('deleted');</script>";
    }
    
    else{
        echo "<script>alert('Didn't delete');</script>";
        die(mysqli_error($conn));
    }
}
?>