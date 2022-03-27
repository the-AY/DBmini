<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
      <link href="style.css" rel="stylesheet">
    <title> Food on Rails</title>
</head>
<header class="text-gray-600 body-font">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
          <nav class="flex lg:w-2/5 flex-wrap items-center text-base md:ml-auto">
            <a class="mr-5 hover:text-gray-900" href="home.html">Home</a>
            <a class="mr-5 hover:text-gray-900" href="err"> Trains </a>
            <a class="mr-5 hover:text-gray-900" href="contactus.php">Contact us</a> </a>
            <a class="hover:text-gray-900" href="aboutus.html" >About us</a>
          </nav>
          <a class="flex order-first lg:order-none lg:w-1/5 title-font font-medium items-center text-gray-900 lg:items-center lg:justify-center mb-4 md:mb-0">
          <span class="ml-3 text-xl">Railway Management System</span>
          </a>
          <div class="lg:w-2/5 inline-flex lg:justify-end ml-5 lg:ml-0">
            <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0" ><a href="logout.php">Logout</a>
            </button>
          </div>
        </div>
      </header>

<?php

 include "config.php";

session_start();
$username = $_SESSION["username"];

if(isset($_POST['Submit']))
{
  //  $C_ID = $_POST['username'];
    // $F_IDNAME=$_POST['item'];
    $QUANTITY = $_POST['quantity'];
    $option=$_POST['item'];
    $tot_price=0;
    $price=0;
    switch ("$option") {

      case "1":
          $price=0;
          $tot_price=0*$QUANTITY;
          $F_ID ="NONE";
          $ITEMS ="0";
          break;
      case "2":
          $price=50;
          $tot_price=50*$QUANTITY;
          $F_ID ="F001";
          $ITEMS ="Masala Dosa";
          break;
      case "3":
        $price=55;
          $tot_price=55*$QUANTITY;
          $F_ID ="F002";
          $ITEMS ="Idli Vada";
          break;
      case "4":
        $price=100;
          $tot_price=100*$QUANTITY;
          $F_ID ="F003";
          $ITEMS ="South Indian";
          break;
      case "5":
        $price=100;
          $tot_price=100*$QUANTITY;
          $F_ID ="F004";
          $ITEMS ="North Indian";
          break;
      case "6":
        $price=40;
          $tot_price=40*$QUANTITY;
          $F_ID ="F005";
          $ITEMS ="Onion Pokoda";
          break;
      case "7":
        $price=20;
            $tot_price=20*$QUANTITY;
            $F_ID ="F006";
            $ITEMS ="Samosa";
            break;
      case "8":
        $price=30;
            $tot_price=30*$QUANTITY;
            $F_ID ="F007";
            $ITEMS ="Gulab Jamun";
            break;
      case "9":
        $price=15;
              $tot_price=15*$QUANTITY;
              $F_ID ="F008";
              $ITEMS ="TEA";
              break;
      default : echo "ERROR";
      break;
    }

      $sql="INSERT INTO `food` (`C_ID`, `ITEMS`, `QUANTITY`, `PRICE`, `F_ID`, `DOD`, `TOTAL_PRICE`) VALUES ('$username', '$ITEMS', '$QUANTITY', '$price', '$F_ID', current_timestamp(), '$tot_price') ";
    
      $result=mysqli_query($conn,$sql);

       // INSERT INTO `food` (`C_ID`, `ITEMS`, `QUANTITY`, `PRICE`, `F_ID`,`TOTAL_PRICE`) VALUES ('$username', '$ITEMS', '$QUANTITY', '$price', '$F_ID','$tot_price') ";
      // $var="SELECT `PRICE` FROM `food` WHERE `C_ID`='$username';";
      // INSERT INTO `food` (`C_ID`, `ITEMS`, `QUANTITY`, `PRICE`, `F_ID`, `STATUS`, `DOD`, `TOTAL_PRICE`) VALUES ('$username', '$ITEMS', '$QUANTITY', '$price', '$F_ID', current_timestamp(), '$tot_price') ";
      //   $tp= $var*(5/100); 
      //   $new="INSERT INTO `orders` (`DOORDER`, `C_ID`, `F_ID`, `TOTAL PRICE`) VALUES (current_timestamp(), '$username', '$F_ID', '$tp'): ";
      //   $result1= mysqli_query($conn,$var);
      //   $result2= mysqli_query($conn,$new);
      if($result)
      {
      echo "<script>alert('Ordered food successfully');</script>";
      echo '<script>alert("Your Price is : '. $tot_price.'")</script>';
      header('Refresh: 2; URL = home.html');
      die;
      }
      else
      {
        header("Location:foodorder.php");
      }
    
  } 
  ?>  
   <form action="foodorder.php" method="post">
        
        <table id="DisplayTable">
            <tr>
              <th>ITEMS</th>
              <th>QUANTITY</th>
              <th>ACTION</th>
              
             
            </tr>
    
            <tr>
                        <td>  <label for="item"></label>
            <select name="item" id="item">
              <option value="1">None</option>
              <option value="2">Masala Dosa</option>
              <option value="3">Idli vada</option>
              <option value="4">South Indian Thali</option>
              <option value="5">North Indian Thali</option>
              <option value="6">Onion Pokoda </option>
              <option value="7">Samosa</option>
              <option value="8">Gulab Jamun</option>
              <option value="9">Tea</option>
            </select>
            <br><br></td>
                        <td><label for="quantity"></label>
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
            </td>
                        <td><button>
            <input type="Submit" value="Submit" name="Submit" class="inline-flex items-center bg-gray-100 border-0 py-2 px-5 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0" >
            </button></td>
                        
              </tr>
  <span class="ml-3 text-xl">                                             Food Menu</span><br>
    <section class="text-gray-600 body-font">
       
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

     

      <!-- <div class="relative mb-4"> -->
          <!-- <label for="username" class="leading-7 text-sm text-gray-600">Username</label> -->
          <!-- <input type="username" id="username" name="username" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"> -->
        <!-- </div> -->
      
       
          
        
        
      </form>
  

      
</body>
</html> 