<!-- <!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
            tr :nth-child(even) {background-color :#ededed}
        </style>
    </head>
    <body>
       
       <table>
           <tr>
               <th>PNR</th>
               <th>NAME</th>
               <th>CITY</th>
               <th>COACH</th>
               <th>SEAT NUMBER</th>
               <th>PRICE</th>
               <th>DEPARTING FROM</th>
               <th>DESTINATION</th>
           </tr>
        
       </table> 
        <script src="" async defer></script>
    </body>
</html> -->



<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
       
       <table>
       <tr>
               <th>PNR</th>
               <th>USERNAME</th>
               <th>PASSENGER NAME</th>
               <th>CUSTOMER NAME</th>
               <th>COACH</th>
               <!-- <th>SEAT NUMBER</th> -->
               <th>PRICE</th>
               <th>DEPARTING FROM</th>
               <th>DESTINATION</th>
           </tr>
           <?php
           include "config.php";
           session_start();
           $username = $_SESSION["username"];
           if(isset($_POST['submit'])) {
        //    $C_ID=$_POST['username'];
           $sql="SELECT A.*,B.* FROM TICKET A, TICKET_HOLDER B WHERE TI_TYPE='TICKET' and A.C_ID='$username' ";
           $result= mysqli_query($conn, $sql);

           if($result) {
               while ($row =mysqli_fetch_assoc($result)) {
                $pnr= $row['PNR'] ;
                $c_name=$row['C_NAME'];
                $price=$row['PRICE'];
                $src= $row['SRC'];
                $dest= $row['DEST'];
                $city=$row["ADDRESS"];
                $coach_no=$row["COACH_NO"];
                

                   echo "<tr><td>" .$pnr. "</td>
                   <td>" . $username. " </td>
                   <td>" . $c_name. " </td>
                   <td>" . $row["TIH_NAME"]. " </td>

                   <td>" .$coach_no. "</td>
                   <td>" .$price. "</td>
                   <td>" .$src. "</td>
                   <td>" .$dest. "</td>
                   
                   </tr>";
               }
            }
            else {
                echo "no results";
            }
            $conn->close();
        }
        else {
            echo "error";
        }
           ?>
       </table> 
        <script src="" async defer></script>
    </body>
</html>

<!-- <td>" .$city. "</td>
               <th>CITY</th> -->