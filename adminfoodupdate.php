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
              </nav>
          <a class="flex order-first lg:order-none lg:w-1/5 title-font font-medium items-center text-gray-900 lg:items-center lg:justify-center mb-4 md:mb-0">
          <span class="ml-3 text-xl">Railway Management Admin Console</span>
          </a>
          <div class="lg:w-2/5 inline-flex lg:justify-end ml-5 lg:ml-0">
            <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0" ><a href="logout.php" Admin Logout</a>
            </button>
          </div>
        </div>

    ==========================================
    <?php
include 'config.php';



$QUERY="SELECT C_ID FROM `food`";
$sql1=mysqli_query($connect,$QUERY);
$Row=mysqli_fetch_array($sql1);
$=$Row[''];
$=$Row[''];
$=$Row[''];
$=$Row[''];


if(isset($_POST['submit'])){
    $=$_GET[''];
    $=$_POST[''];
    $=$_POST[''];
    $=$_POST[''];
    $=$_POST[''];
    $sql="UPDATE `food` SET ``='$',``='$',``='$',``='$' WHERE `MID` = $MID;";
    $result=mysqli_query($connect,$sql);
    if($result){
        echo "<script>alert('updated successfully');</script>";
        header("Location:display_machine.php");
        die;
    }else{
        echo "not";
        //die(mysqfa-li-error($conn));
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <title>Update food </title>
</head>
<body>

<div>

<form action="adminfoodupdate.php" method="post">

<label for=''></label>
<input type="" id='' name='Brand value=<?php echo $#; ?>><br>

<label for='#'>Machine Type</label>
<input type="#" id='#' name='#'value=<?php echo $#; ?>><br>



                <input type="submit" name="submit" value="Submit">   
            </form>
           
  <button ><a href=".php">Back</a></button>
                                       
</div>

</body>
</html>    