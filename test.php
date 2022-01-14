<?php
    function OpenCon()
     {
     $dbhost = "localhost";
     $dbuser = "root";
     $dbpass = "1234";
     $db = "example";
     $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
     
     return $conn;
     }
     
    function CloseCon($conn)
     {
     $conn -> close();
     }
       
?>

<?php


$host="localhost";
$user="root";
$password="";
$db="dbmini";

$con=mysqli_connect($host,$user,$password,$db);
if(!$con){
  echo "db not connected";
}

if(isset($_POST['submit1'])){
  $C_ID=$_POST['cid'];
  $C_NAME=$_POST['cname'];
  $ADDRESS=$_POST['caddress'];
  $PHONE=$_POST['phone'];

$sql1="INSERT INTO customer (C_ID, C_NAME , ADDRESS,PHONE) VALUES ($C_ID,'$C_NAME','$ADDRESS','$PHONE')";
if(mysqli_query($con,$sql1)){
  echo "<script>alert('Inserted Successfully')</script>";
}
else{
  echo "<script>alert('Oops! something went wrong')</script>";
}

}


if(isset($_POST['submit1'])){
  $F_NAME=$_POST['fname'];
  $F_PRICE=$_POST['fprice'];


$sql2="INSERT INTO fish (F_NAME, F_PRICE) VALUES ('$F_NAME','$F_PRICE')";
if(mysqli_query($con,$sql2)){
  echo "<script>alert('Inserted Successfully')</script>";
}
else{
  echo "<script>alert('Oops! something went wrong')</script>";
}
}
?>