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
                <a class="mr-5 hover:text-gray-900" href="admin_ticket.html">Travel Ticket </a>
                <a class="mr-5 hover:text-gray-900" href="admin_postalbook.html">Postal Ticket</a>
                <a class="mr-5 hover:text-gray-900" href="admin_foodbook.html">Food Order</a>
                <a class="mr-5 hover:text-gray-900" href="admin_pnrstart.html">PNR Update</a>
                <a class="mr-5 hover:text-gray-900" href="consolelog.php"> LOG Console</a>
              </nav>
          <a class="flex order-first lg:order-none lg:w-1/5 title-font font-medium items-center text-gray-900 lg:items-center lg:justify-center mb-4 md:mb-0">
          <span class="ml-3 text-xl">Railway Management Admin Console</span>
          </a>
          <div class="lg:w-2/5 inline-flex lg:justify-end ml-5 lg:ml-0">
            <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0" ><a href="logout.php" Admin Logout</a>
            </button>
          </div>
        </div>
      </header>
      <h1>ADMIN CONSOLE Food Orders</h1>
      <a href="adminfoodupdate.php">Update food</a>    
      <table id="DisplayTable">
        <tr>
          <th>Food_id/items</th>
          <th>Quantity</th>
          <th>Customer name</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
        <?php
        include "config.php";
        // session_start();
        // $adusername = $_SESSION["username"];
        $sql= "Select * from `food`;";
      
        $result= mysqli_query($conn,$sql);
      
        if($result){
            while($row=mysqli_fetch_assoc($result))
            {
              $ITEMS=$row['ITEMS'];
              $QUANTITY=$row['QUANTITY'];
              $username=$row['C_ID'];
              
              
              echo '<tr>
              <td>'.$.'</td>
              <td>'..'</td>
              <td>'..'</td>
              <td>'..'</td>
           

              <td>
                      <button ><a href="deletefood.php">Delete</a></button>
          </td>
          </tr>';
      
            }
          }   
        ?>
         <!-- <label for="status">Status</label>
                  <select name="status" id="status">
               <option value="Cancelled">Cancelled</option>
               <option value="Confirmed">Confirmed</option>
                <option value="Fullfiled">Fullfiled</option>
             </select> 
        <br><br> -->

      </table>
      <br><br><br><br><br><br><br>
  
     
</body>
</html>