<?php

include "config.php";


if(isset($_POST['submit'])) {

	$name=$_POST['name'];
	$email=$_POST['email'];
	$age=$_POST['age'];
	$contact=$_POST['contact'];

	$query="INSERT INTO FORM(`NAME`,`EMAIL`,`AGE`,`CONTACT`) VALUES ('$name','$email','$age','$contact')";

	$run=mysqli_query($conn,$query) or die("connection failed");

	if($run) {
		echo "sucessful";
		
		
	}
	else {
		echo "unsuccessful";
		
	}
}
?>
