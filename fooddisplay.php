<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets\favicon.jpg">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link href="404style.css" rel="stylesheet">
  
    <title> Food on Rails</title>
</head>

<body>
    <header class="text-gray-600 body-font">
      <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        <nav class="flex lg:w-2/5 flex-wrap items-center text-base md:ml-auto">
          <a class="mr-5 hover:text-gray-900" href="home.html">Home</a>
          <a class="mr-5 hover:text-gray-900" href="https://www.railyatri.in/train-ticket?utm_source=ET277dweb&gclid=EAIaIQobChMI8ZHZt7yu9QIV1wkrCh2OFw96EAAYASAAEgLFRfD_BwE"> Trains </a>
          <a class="mr-5 hover:text-gray-900" href="ccontactus.php">Contact us</a>
          <a class="mr-5 hover:text-gray-900" href="aboutus.html" >About us</a>
        
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

    <table id="DisplayTable">
        <tr>
          <th>Food_id</th>
          <th>Username</th>
          <th>Items</th>
          <th>Quantity</th>
          <th>Price</th>
          <th>Total Price</th>
          <th>Status</th>

         
        </tr>
    
      <?php
        include "config.php";
        session_start();
        $username = $_SESSION["username"];
        $sql= "Select * from `food` WHERE  `C_ID`='$username';";
       
        $result= mysqli_query($conn,$sql);
        
      
        if($result){
            while($row=mysqli_fetch_assoc($result))
            {

              $F_ID=$row['F_ID'];
              $username=$row['C_ID'];
              $ITEMS=$row['ITEMS'];
              $QUANTITY=$row['QUANTITY'];
              $PRICE=$row['PRICE'];
              $STATUS=$row['STATUS'];
              $TOT_PRICE=$row['TOTAL_PRICE'];
              
              
              
              echo '<tr>
                    <td>'.$F_ID.'</td>
                    <td>'.$username.'</td>
                    <td>'.$ITEMS.'</td>
                    <td>'.$QUANTITY.'</td>
                    <td>'.$PRICE.'</td>
                    <td>'.$TOT_PRICE.'</td>
                    <td>'.$STATUS.'</td>

          </tr>';
       
            }
          //   '<tr>
          //           <td>'.mysqli_fetch_assoc($tp).'</td>

          // </tr>';

          }   
        ?>
         
      </table>
      
     <br><br>
      <button id="button1" onclick="window.print()">Print </button>
</body>
</html>