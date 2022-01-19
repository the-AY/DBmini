<?php

$server= "localhost";
$username="root";
$password="root";
$dbname="test";


$conn = mysqli_connect($server,$username,$password,$dbname);

if(isset($_POST['submit'])) {

	$name=$_POST['name'];
	$email=$_POST['email'];
	$age=$_POST['age'];
	$contact=$_POST['contact'];

	$query="INSERT INTO TEST(`NAME`,`EMAIL`,`AGE`,`CONTACT`) VALUES ('$name','$email','$age','$contact')";

	$run=mysqli_query($conn,$query) or die("connection failed");

	if($run) {
		echo "sucessful";
	}
	else {
		echo "unsuccessful";
	}
}
?>
// 