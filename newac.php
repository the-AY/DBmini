<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/608539d5a6.js" crossorigin="anonymous"></script>
    
    <title>Create a New account</title>
</head>



<?php
include "config.php";

if(isset($_POST['submit'])) {

$C_ID=$_POST['username'];
	$C_NAME=$_POST['name'];
	$AGE=$_POST['age'];
	$ADDRESS=$_POST['address'];
  $GENDER=$_POST['gender'];
  $CONTACT=$_POST['contact'];
  $PASSWORD=$_POST['password'];                                   
	 $query="INSERT INTO customer (`C_ID`, `C_NAME`, `AGE`, `ADDRESS`, `GENDER`, `CONTACT`, `PASSWORD`) VALUES ('$C_ID', '$C_NAME', '$AGE', '$ADDRESS', '$GENDER', '$CONTACT', '$PASSWORD') ";
   $sql ="CREATE TRIGGER console AFTER INSERT ON customer FOR EACH ROW INSERT INTO console (`C_ID`, `DATE`, `ACTION`) VALUES ('$C_ID', current_timestamp(), 'Account Created')";
  
   $run=mysqli_query($conn,$query) or die("connection failed|Username or Password Error");
   $new=mysqli_query($conn,$sql);
	if($run) {
		echo '<script> alert("Your Account was sucessfully created")</script>';	
    header('Refresh: 2; URL = index.php');
	}
	else {
		echo "unsuccessful account creation Please try again Redirecting to ACCOUNT CREATION PAGE";
          header('Refresh: 2; URL = newac.php');		
	}
}
?>

<body>
  <header class="text-gray-600 body-font">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
      <nav class="flex lg:w-2/5 flex-wrap items-center text-base md:ml-auto">
        <a class="mr-5 hover:text-gray-900" href="index.php"><i class="fas fa-home"></i> Home</a>
        <a class="mr-5 hover:text-gray-900" href="index.php"><i class="fas fa-train"></i> Trains </a>
        <a class="mr-5 hover:text-gray-900" href="contactus.php"><i class="fas fa-address-book"></i> Contact us</a> 
        <a class="mr-5 hover:text-gray-900" href="aboutus.html" ><i class="fas fa-address-card"></i> About us</a>
      </nav>
      <a class="flex order-first lg:order-none lg:w-1/5 title-font font-medium items-center text-gray-900 lg:items-center lg:justify-center mb-4 md:mb-0">
      <span class="ml-3 text-xl">Railway Management System</span>
      </a>
      <div class="lg:w-2/5 inline-flex lg:justify-end ml-5 lg:ml-0">
        <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0" ><a href="index.php">login</a>
        </button>
      </div>
    </div>
  </header>
  
  <form action="newac.php" method="post">
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
              <input type="text" id="username" placeholder="Username..." name="username" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
            </div>
            <div class="relative mb-4">
              <label for="full-name" class="leading-7 text-sm text-gray-600">Name</label>
              <input type="text" id="name" name="name" placeholder="Name..." class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
            </div>
            <div class="relative mb-4">
              <label for="full-name" class="leading-7 text-sm text-gray-600">Age</label>
              <input type="number" min="0" max="100" id="Age" name="age" placeholder="Age..." class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="relative mb-4">
                <label for="full-name" class="leading-7 text-sm text-gray-600">Address</label>
                <input type="text" id="address" placeholder="Address... " name="address" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
              </div>
              <div class="mt-4">
                  <label class="block">Select Your gender</label>
                  <select name="gender" id="gender"
                  class="form-select form-select-lg mt-4
                    appearance-none
                    block
                    w-full
                    px-4
                    py-2
                    text-xl
                    font-normal
                    text-gray-700
                    bg-white bg-clip-padding bg-no-repeat
                    border border-solid border-gray-300
                    rounded
                    transition
                    ease-in-out
                    m-0
                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label=".form-select-lg example">
                    <option selected>Select...</option>
               <option value="MALE">Male</option>
               <option value="FEMALE">Female</option>
               <option value="OTHERS">Other</option>
             </select>
              </div>
        <br><br>
              <div class="relative mb-4">
                <label for="full-name" class="leading-7 text-sm text-gray-600">Contact Number</label>
                <input type="tel" id="contact" placeholder="Contact..." name="contact" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" pattern="*/d" title="Numbers only, please..." required>
              </div>
            <div class="relative mb-4">
              <label for="password" class="leading-7 text-sm text-gray-600">Password</label>
              <input type="password" min="4" max="8" title=" Password Should contain:-  4-8 characters  one lowercase  one uppercase  one number" id="password" name="password"
              pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="   Password Should contain:-  8 characters  one lowercase  one uppercase  one number" required
               class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>



<!--                  
<div id="message">
  <h3>Password must contain the following:</h3>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div> -->
				
<script>
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>
            <button type="submit" value="submit" name="submit" class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Create Account </button>
            <button type="reset" value="submit" name="submit">Reset Values </button>
           <p>Already Have an Account?? <a href="index.php" style="color: blue;">Return to login</a></p>
            Password Should contain:- <br> 4-8 characters <br> one lowercase <br> one uppercase <br> one number
            <p class="text-xs text-gray-500 mt-3"></p>
          </div>
        </div>
      </section>
      </form>
</body>
</html>
<!-- trigger in php my admin 
INSERT INTO console (`C_NO`, `C_ID`, `DATE`, `ACTION`) VALUES (NULL, '$C_ID', current_timestamp(), 'Account Created') -->
<!-- include "config.php"; -->
<!-- 
 session_start();
 $username=$_SESSION["username"];
   // $log=mysqli_query($conn,$sq) or die("connection failed|Logged");
    //  $new=mysqli_query($conn,$sql) or die("connection failed|Logged"); -->

    <!-- 
      
<div id="message">
  <h3>Password must contain the following:</h3>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>
				
<script>
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>
     -->