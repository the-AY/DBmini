<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Login/sign up</title>
</head>
<?php
$user = "root";
$host="localhost";
$pwd = ""; 
$db = "dbmini"; 
$conn = mysqli_connect($host, $user, $pwd, $db);
session_start();
if(!$conn)
{
  echo "Error Connecting the Database ";
}
if(isset($_POST['login']))
{ 
$username = $_POST['username']; 
$password = $_POST['password'];
$_SESSION["username"] = $username;
$sql="SELECT * FROM `customer` WHERE `C_ID`='$username' and `PASSWORD` = '$password';";
$result=mysqli_query($conn, $sql); 
$check=mysqli_fetch_array($result);
if(isset($check))
{ 
   header('Location:home.html');
}
else
{
echo "<script>alert('Incorrect Username or password try again')</script>";
}
}
?>

<body>
  <header class="text-gray-600 body-font">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
      <nav class="flex lg:w-2/5 flex-wrap items-center text-base md:ml-auto">
        <a class="mr-5 hover:text-gray-900" href="login.php">Home</a>
        <a class="mr-5 hover:text-gray-900" href="login.php"> Trains </a>
        <a class="mr-5 hover:text-gray-900" href="login.php">Contact us</a> 
        <a class="mr-5 hover:text-gray-900" href="aboutus.html" >About us</a>
        <a class="mr-5 hover:text-gray-900" href="login.php">PNR Status</a>
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
  
    <section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto flex flex-wrap items-center">
      <div class="lg:w-3/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0">
        <h1 class="title-font font-medium text-3xl text-gray-900">Its Login time!</h1>
        <p class="leading-relaxed mt-4">A user needs to login in order to book Ticket,Order food. </p>


      </div>
      <div class="lg:w-2/6 md:w-1/2 bg-gray-100 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
        <h2 class="text-gray-900 text-lg font-medium title-font mb-5">Login</h2>
        <div class="relative mb-4">

          <form action="login.php" method="post">

          <label for="full-name" class="leading-7 text-sm text-gray-600">Username</label>
          <input type="username" id="username" name="username" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <div class="relative mb-4">
          <label for="password" class="leading-7 text-sm text-gray-600">Password</label>
          <input type="password" id="password" name="password" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>

        <button>
          <input type="Submit" value="login" name="login" class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg"> 
        </button>
      </form>
        <a href="newac.php"> Create new account</a>
        <a href="loginadmin.php"> Admin Login</a>
        //send credentials to the database to verify the user
        <p class="text-xs text-gray-500 mt-3"></p>
      
      </div>
    </div>
  </section>
</body>
</html>
