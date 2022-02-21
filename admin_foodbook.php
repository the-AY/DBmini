<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="404style.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <title>Food Order Admin</title>
</head>

<body>
    <header class="text-gray-600 body-font">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
            <nav class="flex lg:w-2/5 flex-wrap items-center text-base md:ml-auto">
                <a class="mr-5 hover:text-gray-900" href="homeadmin.html">Home</a>
                <a class="mr-5 hover:text-gray-900" href="admin_ticket.php">Travel Ticket </a>
                <a class="mr-5 hover:text-gray-900" href="admin_postalbook.html">Postal Ticket</a>
                <a class="mr-5 hover:text-gray-900" href="admin_foodbook.php">Food Order</a>
              
              </nav>
          <a class="flex order-first lg:order-none lg:w-1/5 title-font font-medium items-center text-gray-900 lg:items-center lg:justify-center mb-4 md:mb-0">
          <span class="ml-3 text-xl">Railway Management Admin Console</span>
          </a>
          <div class="lg:w-2/5 inline-flex lg:justify-end ml-5 lg:ml-0">
            <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0" ><a href="logoutadmin.php">Admin Logout </a>
            </button>
          </div>
        </div>
      </header>
      <h1>ADMIN CONSOLE Food Orders</h1>
      <div>
        <br>
      <button id="button1" ><a href="adminfoodupdate.php"> Update food </a> </button>
       </div>
       <br>
      <table id="DisplayTable">
        <tr>
          <th>Food_id</th>
          <th>ITEM</th>
          <th>Quantity</th>
          <th>Customer name</th>
          <th>Status</th>
          <th>Action</th>
          
        </tr>
     
        <?php
        include "config.php";
        // session_start();
        // $adusername = $_SESSION["username"];
       
        $sql= "SELECT * FROM `food`;";
      
        $result= mysqli_query($conn,$sql);
      
        if($result){
            while($row=mysqli_fetch_assoc($result))
            {
              $F_ID=$row['F_ID'];
              $ITEMS=$row['ITEMS'];
              $QUANTITY=$row['QUANTITY'];
              $username=$row['C_ID'];
              $STATUS=$row['STATUS'];
              
              echo '<tr>
              <td>'.$F_ID.'</td>
              <td>'.$ITEMS.'</td>
              <td>'.$QUANTITY.'</td>
              <td>'.$username.'</td>
              <td>'.$STATUS.'</td>
            <td>
                      
                      <button ><a href="deletefood.php?C_ID='.$username.'&F_ID='.$F_ID.'"> Delete</a></button>
                      
          </td>
          </tr>';
      
            }
          }   
        ?>
        </table>
      

        
</body>
</html>

