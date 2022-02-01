<?php
include 'config.php';
include 'admin_foodbook.php';
if(isset($_GET['C_ID']) and isset($_GET['F_ID'])){
    // $C_ID=$_GET['username'];
    $user=$_GET['C_ID'];
    $F_ID=$_GET['F_ID'];
    
    $sql4="DELETE FROM `food` WHERE `C_ID`='$user' AND `F_ID`='$F_ID' ";
    $result=mysqli_query($conn,$sql4);
    if($result){
        header('location:admin_foodbook.php');
        echo "<script>alert('deleted');</script>";
    }
    
    else{
        echo "<script>alert('Didn't delete');</script>";
        die(mysqli_error($conn));
    }
}
?>