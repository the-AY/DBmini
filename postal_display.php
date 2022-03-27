<!DOCTYPE html>

<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/608539d5a6.js" crossorigin="anonymous"></script>
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <style>
            table {
                border-collapse: collapse;
                width: 100%;
                color: #eb4034;
                font-family: monospace;
                font-size: 25px;
                text-align: left;
            }
            th {
                background-color: #eb4034;
                color: white;
            }
            tr:nth-child(even) {background-color :#ededed}
        </style>
    </head>
    <body>

    <header class="text-gray-600 body-font">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
      <nav class="flex lg:w-2/5 flex-wrap items-center text-base md:ml-auto">
        <a class="mr-5 hover:text-gray-900" href="home.html">Home</a>
        <a class="mr-5 hover:text-gray-900" href="https://www.railyatri.in/train-ticket?utm_source=ET277dweb&gclid=EAIaIQobChMI8ZHZt7yu9QIV1wkrCh2OFw96EAAYASAAEgLFRfD_BwE"> Trains </a>
        <a class="mr-5 hover:text-gray-900" href="contactus.php">Contact us</a> </a>
        <a class="mr-5 hover:text-gray-900" href="aboutus.html" >About us</a>
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
       
       <table>
           <tr>
               <th>PNR</th>
               <th>NAME</th>
               <th>PRICE</th>
               <th>FROM</th>
               <th>DESTINATION</th>
               <th>PNR STATUS</th>
           </tr>
           <?php
           include "config.php";
           session_start();
           $username = $_SESSION["username"];
        //    $C_ID=$_POST['username'];
           $sql="SELECT * FROM TICKET WHERE TI_TYPE='POSTAL' and C_ID='$username' ";
           $result= mysqli_query($conn, $sql);

           if($result) {
               while ($row =mysqli_fetch_assoc($result)) {
                $pnr= $row['PNR'] ;
                $c_name=$row['C_NAME'];
                $price=$row['PRICE'];
                $src= $row['SRC'];
                $dest= $row['DEST'];
                $pnr_status=$row["PNR_STATUS"];

                   echo "<tr><td>" .$pnr. "</td>
                   <td>" . $c_name. " </td>
                   <td>" .$price. "</td>
                   <td>" .$src. "</td>
                   <td>" .$dest. "</td>
                   <td>".$pnr_status."</td>
                   </tr>";
               }
            }
            else {
                echo "no results";
            }
            $conn->close();
           ?>
       </table> 
        <script src="" async defer></script>
    </body>
</html>