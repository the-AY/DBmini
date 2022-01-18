testing if creditials found the hop to home page 
index.html and in indexadmin.html

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Login/sign up</title>
</head>
<body>
  <header class="text-gray-600 body-font">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
      <nav class="flex lg:w-2/5 flex-wrap items-center text-base md:ml-auto">
        <a class="mr-5 hover:text-gray-900" href="index.html">Home</a>
        <a class="mr-5 hover:text-gray-900" href="https://www.railyatri.in/train-ticket?utm_source=ET277dweb&gclid=EAIaIQobChMI8ZHZt7yu9QIV1wkrCh2OFw96EAAYASAAEgLFRfD_BwE"> Trains </a>
        <a class="mr-5 hover:text-gray-900" href="contactus.html">Contact us</a> 
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
  
<?php
include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST")
    {
      // username and password sent from form 
      
      $USERNAME = $_POST['USERNAME'];
      $PASSWORD = $_POST['PASSWORD']; 
      
      $sql = "SELECT * FROM `admin` WHERE USERNAME = '$USERNAME' and PASSWORD = '$PASSWORD'";
      $result = mysqli_query($connect,$sql);
      
      if($result)
      {
      while($row=mysqli_fetch_assoc($result))
      {
         header("location: index.html");
      }
      else
      {
      header("location: login.html");
      } 
   }
}
?>
     <form  method = "post">
                  <label>UserName  :</label><input type = "text" name = "USERNAME" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "PASSWORD" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>
   html display error
   </body>
</html>
<!--   <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>  -->