<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="404style.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <title>Ticket Admin</title>
</head>
<body>
    <header class="text-gray-600 body-font">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
            <nav class="flex lg:w-2/5 flex-wrap items-center text-base md:ml-auto">
                <a class="mr-5 hover:text-gray-900" href="homeadmin.html">Home</a>
                <a class="mr-5 hover:text-gray-900" href="admin_ticket.html">Travel Ticket </a>
                <a class="mr-5 hover:text-gray-900" href="admin_postalbook.html">Postal Ticket</a>
                <a class="mr-5 hover:text-gray-900" href="admin_foodbook.html">Food Order</a>
              
              </nav>
          <a class="flex order-first lg:order-none lg:w-1/5 title-font font-medium items-center text-gray-900 lg:items-center lg:justify-center mb-4 md:mb-0">
          <span class="ml-3 text-xl">Railway Management Admin Console</span>
          </a>
          <div class="lg:w-2/5 inline-flex lg:justify-end ml-5 lg:ml-0">
            <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0" ><a href="logout.php" >Admin Logout </a>
            </button>
          </div>
        </div>

    <?php
include 'config.php';
if(isset($_POST['submit'])){
    
    $status=$_POST['status'];
    $sql="UPDATE TICKET SET `PNR_STATUS`='$status' WHERE TI_TYPE='TICKET';";
    $result=mysqli_query($conn,$sql);
    if($result){
       
        header('Refresh: 2; URL = admin_ticket.php');
        echo "<script>alert('updated successfully');</script>";
        die;
    }else{
        echo "not updated";
    }
}
?>

<form action="Update_ticket.php" method="post">
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto flex flex-wrap items-center">
          <!-- <div class="lg:w-3/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0">
            <h1 class="title-font font-medium text-3xl text-gray-900">Create a New account</h1>
            <p class="leading-relaxed mt-4">A new account is needed to save your progress!!</p>
          </div> -->
          <div class="lg:w-2/6 md:w-1/2 bg-gray-100 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
            <h2 class="text-gray-900 text-lg font-medium title-font mb-5">Enter the Customer name</h2>
            <div class="relative mb-4">
              <label for="full-name" class="leading-7 text-sm text-gray-600">Username</label>
              <input type="text" id="username" name="username" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
        
              <label for="status">UPDATE </label>
                  <select name="status" id="status">
               <option value="WL">Waiting List</option>
               <option value="CNF">Confirmed</option>
               <option value="RAC">Reserve Against Cancellation</option>
               <option value="TQWL">Tatkal Waiting List</option>
               <option value="CAN">Cancelled</option>  
             </select>
        <br><br>
        
            <button type="submit" value="Update" name="submit" class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg"> Update  </button>
         
    
            <p class="text-xs text-gray-500 mt-3"></p>
          </div>
        </div>
      </section>
      </form>
</body>
</html>

<!-- // $QUERY="";
// $sql1=mysqli_query($conn,$QUERY);
// $Row=mysqli_fetch_array($sql1);
// // $=$Row['']; 

// $=$_GET[''];
    // $=$_POST[''];
    // $=$_POST[''];
    // $=$_POST[''];
    // $=$_POST[''];
    // $sql="UPDATE `food` SET ``='$',``='$',``='$',``='$' WHERE `MID` = $MID;";

       //die(mysqfa-li-error($conn));
-->
