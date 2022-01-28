<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="404style.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <title>Travel Ticket Admin</title>
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
              </nav>
          <a class="flex order-first lg:order-none lg:w-1/5 title-font font-medium items-center text-gray-900 lg:items-center lg:justify-center mb-4 md:mb-0">
          <span class="ml-3 text-xl">Railway Management Admin Console</span>
          </a>
          <div class="lg:w-2/5 inline-flex lg:justify-end ml-5 lg:ml-0">
            <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0" ><a href="loginadmin.php">Admin Login</a>
            </button>
          </div>
        </div>
      </header>
        <h1>ADMIN CONSOLE TRAIN TRAVEL TICKET</h1>
        
        <table id="DisplayTable">
          <tr>
            <th>PNR</th>
            <th>Username</th>
            <th>CUSTOMER NAME</th>
            <th>PASSENGERS</th>
            <th>COACH NUMBER</th>
            <th>SEAT NUMBER</th>
            <th>PRICE</th>
            <th>DEPARTING FROM</th>
            <th>DESTINATION</th>
            <th>PNR Status</th>
          </tr>
          <?php
          include "config.php";
          session_start();
          $adusername = $_SESSION["username"];
          $sql= "SELECT A.*,B.* FROM TICKET A, TICKET_HOLDER B WHERE A.TI_TYPE='TICKET'";
        
          $result= mysqli_query($conn,$sql);
        
          if($result){
              while($row=mysqli_fetch_assoc($result))
              {
                $pnr= $row['PNR'] ;
                $c_name=$row['C_NAME'];
                $c_id=$row['C_ID'];
                $price=$row['PRICE'];
                $src= $row['SRC'];
                $dest= $row['DEST'];
                $city=$row["ADDRESS"];
                $coach_no=$row["COACH_NO"];
                $seat_no=$row["SEAT_NO"];
                $pnr_status=$row["PNR_STATUS"];

                   echo "<tr>
                   <td>" .$pnr. "</td>
                   <td>" . $c_id. " </td>
                   <td>" . $c_name. " </td>
                   <td>" .$row["TIH_NAME"]. " </td>
                   <td>" .$coach_no. "</td>
                   <td>" .$seat_no. "</td>
                   <td>" .$price. "</td>
                   <td>" .$src. "</td>
                   <td>" .$dest. "</td>
                   <td>".$pnr_status."</td>
                   </tr>";
              }
            }   
          ?>
           
        </table>
        <br><br><br><br><br><br><br>
        <button type="submit" ><a href="deleteticket.php">Delete</a></button>
       <a href="Update_ticket.php">Update ticket </a>
       
</body>
</html>
