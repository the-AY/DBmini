


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    </head>

    <body>
      <header class="text-gray-600 body-font">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
          <nav class="flex lg:w-2/5 flex-wrap items-center text-base md:ml-auto">
            <a class="mr-5 hover:text-gray-900" href="home.html">Home</a>
            <a class="mr-5 hover:text-gray-900" href="https://www.railyatri.in/train-ticket?utm_source=ET277dweb&gclid=EAIaIQobChMI8ZHZt7yu9QIV1wkrCh2OFw96EAAYASAAEgLFRfD_BwE"> Trains </a>
            <a class="mr-5 hover:text-gray-900" href="contactus.html">Contact us</a>
            <a class="mr-5 hover:text-gray-900" href="aboutus.html" >About us</a>
            <a class="mr-5 hover:text-gray-900" href="ticket.html">Back</a>
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
             
          <div class="flex justify-center">
            <div>
              
            <form  method="post"> 
              <div class="mb-3 xl:w-96">
                <label
                  for="exampleFormControlInput2"
                  class="form-label inline-block mb-2 text-gray-700 text-xl"
                  >Enter your PNR Number</label
                >
                <input
                  type="text"
                  class="
                    form-control
                    block
                    w-full
                    px-4
                    py-2
                    text-xl
                    font-normal
                    text-gray-700
                    bg-white bg-clip-padding
                    border border-solid border-gray-300
                    rounded
                    transition
                    ease-in-out
                    m-0
                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                  "
                  id="exampleFormControlInput2"
                  placeholder="PNR"
                  name="pnr"
                />
              </div>
              <div class="flex space-x-2 justify-center">
                <div>
                  <button type="submit"  name="submit" value="submit" class="inline-block px-7 py-3 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Submit</button>
                </div>
              </div>
            </form>

            <?php
include 'config.php';
if(isset($_POST['submit'])){
    $pnr=$_POST['pnr'];
    $sql= "SELECT * FROM TICKET WHERE TI_TYPE='POSTAL' and PNR='$pnr'";
        
    $result= mysqli_query($conn,$sql);
  
    if($result){
        while($row=mysqli_fetch_assoc($result))
        {

    $sql1="DELETE FROM TICKET WHERE TI_TYPE='POSTAL' AND PNR='$pnr'";
    $result1=mysqli_query($conn,$sql1);
    if($result1){
        header('location:admin_postalbook.php');
        echo "<script>alert('deleted');</script>";
    }
    else{
        echo "<script>alert('Didn't delete');</script>";
        die(mysqli_error($conn));
    }
}
    }
}
?>


        <script src="" async defer></script>

        
    </body>
</html>
