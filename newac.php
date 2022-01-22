<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Create a New account</title>
</head>
<?php

// include "config.php";

$host = "localhost";
$user ="root";
$pwd = "";
$db ="dbmini";
$conn = mysqli_connect($host,$user,$pwd,$db);

if(isset($_POST['submit'])) {

	$C_ID=$_POST['username'];
	$C_NAME=$_POST['name'];
	$AGE=$_POST['age'];
	$ADDRESS=$_POST['address'];
  $GENDER=$_POST['gender'];
  $CONTACT=$_POST['contact'];
  $PASSWORD=$_POST['password'];
	$query="INSERT INTO customer (`C_ID`, `C_NAME`, `AGE`, `ADDRESS`, `GENDER`, `CONTACT`, `PASSWORD`) VALUES ('$C_ID', '$C_NAME', '$AGE', '$ADDRESS', '$GENDER', '$CONTACT', '$PASSWORD') ";

	$run=mysqli_query($conn,$query) or die("connection failed");

	if($run) {
		echo "sucessfully Inserted Go to LOGIN PAGE";	
	}
	else {
		echo "unsuccessful creation Please try again";
		
	}
}
?>

<body>
  <header class="text-gray-600 body-font">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
      <nav class="flex lg:w-2/5 flex-wrap items-center text-base md:ml-auto">
        <a class="mr-5 hover:text-gray-900" href="home
        .html">Home</a>
        <a class="mr-5 hover:text-gray-900" href="https://www.railyatri.in/train-ticket?utm_source=ET277dweb&gclid=EAIaIQobChMI8ZHZt7yu9QIV1wkrCh2OFw96EAAYASAAEgLFRfD_BwE"> Trains </a>
        <a class="mr-5 hover:text-gray-900" href="contactus.html">Contact us</a> </a>
        <a class="mr-5 hover:text-gray-900" href="aboutus.html" >About us</a>
        <a class="mr-5 hover:text-gray-900" href="pnrstart.html">PNR Status</a>
      </nav>
      <a class="flex order-first lg:order-none lg:w-1/5 title-font font-medium items-center text-gray-900 lg:items-center lg:justify-center mb-4 md:mb-0">
      <span class="ml-3 text-xl">Railway Management System</span>
      </a>
      <div class="lg:w-2/5 inline-flex lg:justify-end ml-5 lg:ml-0">
        <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0" ><a href="login.html">login</a>
        </button>
      </div>
    </div>
  </header>
  
  <form action="newacbackup.php" method="post">
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto flex flex-wrap items-center">
          <div class="lg:w-3/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0">
            <h1 class="title-font font-medium text-3xl text-gray-900">Create a New account</h1>
            <p class="leading-relaxed mt-4">A new account is needed to save your progress!!</p>
          </div>
          <div class="lg:w-2/6 md:w-1/2 bg-gray-100 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
            <h2 class="text-gray-900 text-lg font-medium title-font mb-5">Enter your details</h2>
            <div class="relative mb-4">
              <label for="full-name" class="leading-7 text-sm text-gray-600">Username</label>
              <input type="text" id="username" name="username" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="relative mb-4">
              <label for="full-name" class="leading-7 text-sm text-gray-600">Name</label>
              <input type="text" id="name" name="name" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="relative mb-4">
              <label for="full-name" class="leading-7 text-sm text-gray-600">Age</label>
              <input type="text" id="Age" name="age" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="relative mb-4">
                <label for="full-name" class="leading-7 text-sm text-gray-600">Address</label>
                <input type="text" id="address" name="address" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
              </div>
              <label for="gender">Gender</label>
                  <select name="gender" id="gender">
               <option value="MALE">MALE</option>
               <option value="FEMALE">FEMALE</option>
             </select>
        <br><br>
              <div class="relative mb-4">
                <label for="full-name" class="leading-7 text-sm text-gray-600">Phone Number</label>
                <input type="phone" id="contact" name="contact" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
              </div>
            <div class="relative mb-4">
              <label for="email" class="leading-7 text-sm text-gray-600">Password</label>
              <input type="password" id="password" name="password" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <button type="submit" value="submit" name="submit" class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Create a account </button>
           <a href="login.php">Return to login</a>
            //send credentials to the database to create a new account to the user
            <p class="text-xs text-gray-500 mt-3"></p>
          </div>
        </div>
      </section>
      </form>
</body>
</html>
