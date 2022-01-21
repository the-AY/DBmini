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
               <th>NAME</th>
               <th>CITY</th>
               <th>PRICE</th>
               <th>FROM</th>
               <th>DESTINATION</th>
           </tr>
           <?php
           include "config.php";
           $sql="SELECT * FROM TICKET WHERE TI_TYPE='POSTAL' ";
           $result=$conn->query($sql);

           if($result->num_rows>0) {
               while ($row =$result->fetch_assoc()) {
                   echo "<tr><td>" . $row["PNR"] . "</td><td>" . $row["C_NAME"] . " </td><td>" . $row["PRICE"] . "</td><td>" . $row["SRC"] . "</td><td>" . $row["DEST"] . "</td></tr>";
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