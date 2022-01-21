<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title> Food on Rails</title>
</head>
<header class="text-gray-600 body-font">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
          <nav class="flex lg:w-2/5 flex-wrap items-center text-base md:ml-auto">
            <a class="mr-5 hover:text-gray-900" href="index.html">Home</a>
            <a class="mr-5 hover:text-gray-900" href="err"> Trains </a>
            <a class="mr-5 hover:text-gray-900" href="contactus.html">Contact us</a> </a>
            <a class="hover:text-gray-900" href="aboutus.html" >About us</a>
          </nav>
          <a class="flex order-first lg:order-none lg:w-1/5 title-font font-medium items-center text-gray-900 lg:items-center lg:justify-center mb-4 md:mb-0">
          <span class="ml-3 text-xl">Railway Management System</span>
          </a>
          <div class="lg:w-2/5 inline-flex lg:justify-end ml-5 lg:ml-0">
            <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0" ><a href="login.php">login</a>
            </button>
          </div>
        </div>
      </header>

<?php

include "config.php";
session_start();
if(isset($_POST['Submit'])){
    $C_ID = $_POST['username'];
    $F_IDNAME=$_POST['item'];
    $QUANTITY = $_POST['quantity'];
    $sql="INSERT INTO `food` (`C_ID`, `ITEMS`, `QUANTITY`, `PRICE`, `F_ID`) VALUES ('$C_ID', '$F_IDNAME', '$QUANTITY', '', '') ";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
    echo "<script>alert('inserted successfully');</script>";
     header("Location:foodorder.php");
    die;
    }
    else
    {
      header("Location:foodorder.php");
    }
  } 
  ?>  
  <span class="ml-3 text-xl">Food Menu</span>
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-wrap -m-4">
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
              <a class="block relative h-48 rounded overflow-hidden">
                <img alt="BreakFast" class="object-cover object-center w-full h-full block" src="assets\masaladosa.jpg">
              </a>
              <div class="mt-4">
                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">BreakFast</h3>
                <h2 class="text-gray-900 title-font text-lg font-medium">Masala Dosa</h2>
                <p class="mt-1">₹50</p>
              </div>
            </div>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
              <a class="block relative h-48 rounded overflow-hidden">
                <img alt="BreakFast" class="object-cover object-center w-full h-full block" src="assets\idlivada.jpg">
              </a>
              <div class="mt-4">
                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">BreakFast</h3>
                <h2 class="text-gray-900 title-font text-lg font-medium">Idli Vada</h2>
                <p class="mt-1">₹55</p>
              </div>
            </div>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
              <a class="block relative h-48 rounded overflow-hidden">
                <img alt="Lunch/Dinner" class="object-cover object-center w-full h-full block" src="assets\souththali.jpg">
              </a>
              <div class="mt-4">
                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Lunch/Dinner</h3>
                <h2 class="text-gray-900 title-font text-lg font-medium">South Indian</h2>
                <p class="mt-1">₹100</p>
              </div>
            </div>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
              <a class="block relative h-48 rounded overflow-hidden">
                <img alt="Lunch/Dinner" class="object-cover object-center w-full h-full block" src="assets\norththali.jpg">
              </a>
              <div class="mt-4">
                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Lunch/Dinner</h3>
                <h2 class="text-gray-900 title-font text-lg font-medium">North Indian</h2>
                <p class="mt-1">₹100</p>
              </div>
            </div>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
              <a class="block relative h-48 rounded overflow-hidden">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="assets\onnion pokoda.jpg">
              </a>
              <div class="mt-4">
                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Snacks</h3>
                <h2 class="text-gray-900 title-font text-lg font-medium">Onion Pokoda</h2>
                <p class="mt-1">₹40</p>
              </div>
            </div>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
              <a class="block relative h-48 rounded overflow-hidden">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="assets\Samosachutney.jpg">
              </a>
              <div class="mt-4">
                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Snacks</h3>
                <h2 class="text-gray-900 title-font text-lg font-medium">Samosa</h2>
                <p class="mt-1">₹20</p>
              </div>
            </div>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
              <a class="block relative h-48 rounded overflow-hidden">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="assets\gulabjamun.jpg">
              </a>
              <div class="mt-4">
                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Deserts</h3>
                <h2 class="text-gray-900 title-font text-lg font-medium">Gulab Jamun</h2>
                <p class="mt-1">₹30</p>
              </div>
            </div>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
              <a class="block relative h-48 rounded overflow-hidden">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="assets\tea.jpg">
              </a>
              <div class="mt-4">
                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Beverage</h3>
                <h2 class="text-gray-900 title-font text-lg font-medium">TEA</h2>
                <p class="mt-1">₹15</p>
              </div>
            </div>
          </div>
        </div>

      </section>
      <div class="lg:w-2/5 inline-flex lg:justify-end ml-5 lg:ml-0">

      <form action="foodorder.php" method="post">

      <div class="relative mb-4">
          <label for="username" class="leading-7 text-sm text-gray-600">Username</label>
          <input type="username" id="username" name="username" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <label for="Fid">Item:</label>
        <select name="item" id="item">
          <option value="None">None</option>
          <option value="F01-Masala Dosa">Masala Dosa</option>
          <option value="F02-Idli vada">Idli vada</option>
          <option  value="F03-South Indian Thali">South Indian Thali</option>
          <option value="F04-North Indian Thali">North Indian Thali</option>
          <option value="F05-Onion Pokoda">Onion Pokoda </option>
          <option value="F06-Samosa">Samosa</option>
          <option value="F07-Gulab Jamun">Gulab Jamun</option>
          <option value="F08-TEA">Tea</option>
        </select>
        <br><br>
       
          <label for="Fid">Quantity:</label>
          <select name="quantity" id="quantity">
            <option value="None">0</option>
            <option value="1">1</option> 
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
          </select>
          <br><br>
        
        
        <button>
        <input type="Submit" value="Submit" name="Submit" class="inline-flex items-center bg-gray-100 border-0 py-2 px-5 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0" >
        </button>
      </form>
      
</body>
</html> 