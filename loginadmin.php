<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/608539d5a6.js" crossorigin="anonymous"></script>
    <link href="404style.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <title>Railway Management Admin console</title>

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
$sql="SELECT * FROM `admin` WHERE `username`='$username' and `password` = '$password';";
$result=mysqli_query($conn, $sql); 
$check=mysqli_fetch_array($result);
if(isset($check))
{ 
   header('Location:homeadmin.html');
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
            <a class="mr-4" href="loginadmin.php"><i class="fas fa-home"></i> Home</a>
            <a class="mr-4" href="loginadmin.php"><i class="fas fa-ticket-alt"></i> Travel Ticket </a>
            <a class="mr-4" href="loginadmin.php"><i class="fas fa-mail-bulk"></i> Postal Ticket</a>
            <a class="mr-4" href="loginadmin.php"><i class="fas fa-utensils"></i> Food Order</a>
 
          </nav>
          <a class="flex order-first lg:order-none lg:w-1/5 title-font font-medium items-center text-gray-900 lg:items-center lg:justify-center mb-4 md:mb-0">
          <span class="ml-3 text-xl">Railway Management Admin Console</span>
          </a>
          <div class="lg:w-2/5 inline-flex lg:justify-end ml-5 lg:ml-0">
        <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0" ><a href="index.php">User Console</a>
        </button>
      </div>
          <div class="lg:w-2/5 inline-flex lg:justify-end ml-5 lg:ml-0">
           
          
          </div>
        </div>
      </header>
    
    
      <section class="text-gray-600 body-font">
      <div class="container px-5 py-24 mx-auto flex flex-wrap items-center">
        <div class="lg:w-3/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0">
          <h1 class="title-font font-medium text-3xl text-gray-900">Its Admin Login Time!</h1>
          <p class="leading-relaxed mt-4">A Admin needs to login in order to check for ticket details ,and food orders </p>
  
  
        </div>
        <div class="lg:w-2/6 md:w-1/2 bg-gray-100 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
          <h2 class="text-gray-900 text-lg font-medium title-font mb-5">Login</h2>
          <div class="relative mb-4">
  
            <form action="loginadmin.php" method="POST">
            <label for="full-name" class="leading-7 text-sm text-gray-600">User Name</label>
            <input type="username" id="username" name="username" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
          <div class="relative mb-4">
            <label for="password" class="leading-7 text-sm text-gray-600">Password</label>
            <input type="password" id="password" name="password" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
  
          <button>
            <input type="Submit" value="login" name="login" class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg" href="indexadmin.html" >
           
          </button>

          <p class="text-xs text-gray-500 mt-3"></p>
        </form>
        </div>
      </div>
    </section>
  </body>
  </html>
  