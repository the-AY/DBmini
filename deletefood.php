<?php
include 'config.php';
if(isset($_GET['C_ID'])){
    // $C_ID=$_GET['username'];
    $username=$_GET['C_ID']
    $F_ID=$_GET['F_ID'];
    $sql="DELETE FROM `food` WHERE `F_ID`=$F_ID AND `C_ID`=$username ";
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