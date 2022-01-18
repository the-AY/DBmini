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
                <a class="mr-5 hover:text-gray-900" href="indexadmin.html">Home</a>
                <a class="mr-5 hover:text-gray-900" href="admin_ticket.html">Travel Ticket </a>
                <a class="mr-5 hover:text-gray-900" href="admin_postalbook.html">Postal Ticket</a>
                <a class="mr-5 hover:text-gray-900" href="admin_foodbook.html">Food Order</a>
                <a class="mr-5 hover:text-gray-900" href="admin_pnrstart.html">PNR Update</a>
              </nav>
          <a class="flex order-first lg:order-none lg:w-1/5 title-font font-medium items-center text-gray-900 lg:items-center lg:justify-center mb-4 md:mb-0">
          <span class="ml-3 text-xl">Railway Management Admin Console</span>
          </a>
          <div class="lg:w-2/5 inline-flex lg:justify-end ml-5 lg:ml-0">
            <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0" ><a href="loginadmin.html">Admin Login</a>
            </button>
          </div>
        </div>
      </header>
      <h1>ADMIN CONSOLE Food Orders</h1>
        
      <table id="DisplayTable">
        <tr>
          <th>Food_id</th>
          <th>Train Number</th>
          <th>Seat_no</th>
          <th>Items</th>
          <th>Quantity</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
        <?php
        include "config.php";
      
        $sql= "Select * from `food`;";
      
        $result= mysqli_query($connect,$sql);
      
        if($result){
            while($row=mysqli_fetch_assoc($result))
            {
              
              $F_IDNAME=$row['Items'];
              $QTY=$row['Quantity'];
              $C_ID=$row['C_ID'];
              $PRICE=$row[' '];
              
              
              echo '<tr>
              <td>'.$F_IDNAME.'</td>
              <td>'.$PRICE.'</td>
              <td>'.$C_ID.'</td>
              <td>'.$QTY.'</td>
              <td>
                      <button ><a href="update_customer.php?C_ID='.$C_ID.'">Update</a></button>
                      <button ><a href="deletefood.php">Delete</a></button>
          </td>
          </tr>';
      
            }
          }   
        ?>
         
      </table>
      <br><br><br><br><br><br><br>
     <a href="Update_food.html">Update food</a>
     
</body>
</html>