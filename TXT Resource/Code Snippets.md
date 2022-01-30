# Drop down menu:-

<form action="/action_page.php">
  <label for="cars">Choose a car:</label>
  <select name="cars" id="cars">
    <option value="volvo">Volvo</option>
    <option value="saab">Saab</option>
    <option value="opel">Opel</option>
    <option value="audi">Audi</option>
  </select>
  <br><br>
  <input type="submit" value="Submit">
</form>
https://codepen.io/JewettCitySoftwareCorporation/pen/GLLBeG

# alert function:-
<html>
   <head>   
      <script type = "text/javascript">
            function fun() {


               alert ("This is an alert dialog box");
            }
            </script>     
   </head>
   
   <body>
      <p> Click the following button to see the effect </p>      
      <form>
         <input type = "button" value = "Click me" onclick = "fun();" />
      </form>     
   </body>
</html>

# nav bar (final v.01)

<header class="text-gray-600 body-font">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
          <nav class="flex lg:w-2/5 flex-wrap items-center text-base md:ml-auto">
            <a class="mr-5 hover:text-gray-900" href="index.html">Home</a>
            <a class="mr-5 hover:text-gray-900" href="Traininfo.html"> Trains </a>
            <a class="mr-5 hover:text-gray-900" href="contactus.html">Contact us</a> </a>
            <a class="hover:text-gray-900" href="aboutus.html" >About us</a>
          </nav>
          <a class="flex order-first lg:order-none lg:w-1/5 title-font font-medium items-center text-gray-900 lg:items-center lg:justify-center mb-4 md:mb-0">
          <span class="ml-3 text-xl">Railway Management System</span>
          </a>
          <div class="lg:w-2/5 inline-flex lg:justify-end ml-5 lg:ml-0">
            <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0" ><a href="pnrstart.html">PNR Status</a>
            </button>
          </div>
        </div>
      </header>
 # css file path link
 <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">


 # php code for connection 
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


# config (php)
<?php

$host = "localhost";
$user ="root";
$pwd = "";
$db ="dbmini";
$connect = mysqli_connect($host,$user,$pwd,$db);

?>
//   <button ><a href="deletefood.php">Delete</a></button>
//   adminfoodupdate.php

// <label for="status">Status</label>

// <select name="status" id="status">
// <option value="Cancelled">Cancelled</option>
// <option value="Confirmed">Confirmed</option>
// <option value="Fullfiled">Fullfiled</option>
// </select> 
// <br><br> 