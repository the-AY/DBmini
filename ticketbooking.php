

 <!DOCTYPE html>

               <html>
                   <head>
                       <meta charset="utf-8">
                       <meta http-equiv="X-UA-Compatible" content="IE=edge">
                       <title></title>
                       <meta name="description" content="">
                       <meta name="viewport" content="width=device-width, initial-scale=1">
                       <link rel="stylesheet" href="">
                   </head>
                   <body>
                        <?php
                        include "config.php";
                        include "tickets.php";

                            session_start();
                            $username = $_SESSION["username"];

                        $train1=array();
                        $train2=array();
                        $train3=array();
                        $train4=array();
                        $train5=array();
                        $train6=array();
                        $d;
                        $sr;
                        $de;
                        if (array_key_exists($source, $train1) and array_key_exists($dest, $train1)) {
                            $d=mktime();
                            $sr;
                            $de;
                            echo"
                                    <tr>
                                       <th>Train</th>
                                       <th>Schedule</th>
                                       <th>Destination</th>
                                       <th>Source</th>
                                       <th>Runs On</th>
                                   </tr>";
                                    echo '<tr>
                                           <td>Train1</td>
                                           <td><a><img src="../trains/train1.jpg">Train Schedule</a></td>
                                           <td>" . $d . "</td>
                                           <td>" . $s. " </td>
                                           <td>" . echo "date("h:i d-m-y",$d)" . "</td>
                                           <td> 
                                   </tr>';

                        }
                        elseif (array_key_exists($source, $train2) and array_key_exists($dest, $train2)) {
                            $d=mktime();
                            $sr;
                            $de;
                            echo"
                                    <tr>
                                       <th>Train</th>
                                       <th>Schedule</th>
                                       <th>Destination</th>
                                       <th>Source</th>
                                       <th>Runs On</th>
                                   </tr>";
                                    echo '<tr>
                                           <td>Train1</td>
                                           <td><a><img src="../trains/train1.jpg">Train Schedule</a></td>
                                           <td>" . $d . "</td>
                                           <td>" . $s. " </td>
                                           <td>" . echo "date("h:i d-m-y",$d)" . "</td>
                                           <td> 
                                   </tr>';

                        }
                        if (array_key_exists($source, $train3) and array_key_exists($dest, $train3)) {
                            $d=mktime();
                            $sr;
                            $de;
                            echo"
                                    <tr>
                                       <th>Train</th>
                                       <th>Schedule</th>
                                       <th>Destination</th>
                                       <th>Source</th>
                                       <th>Runs On</th>
                                   </tr>";
                                    echo '<tr>
                                           <td>Train1</td>
                                           <td><a><img src="../trains/train1.jpg">Train Schedule</a></td>
                                           <td>" . $d . "</td>
                                           <td>" . $s. " </td>
                                           <td>" . echo "date("h:i d-m-y",$d)" . "</td>
                                           <td> 
                                   </tr>';

                        }
                        if (array_key_exists($source, $train4) and array_key_exists($dest, $train4)) {
                            $d=mktime();
                            $sr;
                            $de;
                            echo"
                                    <tr>
                                       <th>Train</th>
                                       <th>Schedule</th>
                                       <th>Destination</th>
                                       <th>Source</th>
                                       <th>Runs On</th>
                                   </tr>";
                                    echo '<tr>
                                           <td>Train1</td>
                                           <td><a><img src="../trains/train1.jpg">Train Schedule</a></td>
                                           <td>" . $d . "</td>
                                           <td>" . $s. " </td>
                                           <td>" . echo "date("h:i d-m-y",$d)" . "</td>
                                           <td> 
                                   </tr>';

                        }
                        elseif (array_key_exists($source, $train5) and array_key_exists($dest, $train5)) {
                            $d=mktime();
                            $sr;
                            $de;
                            echo"
                                    <tr>
                                       <th>Train</th>
                                       <th>Schedule</th>
                                       <th>Destination</th>
                                       <th>Source</th>
                                       <th>Runs On</th>
                                   </tr>";
                                    echo '<tr>
                                           <td>Train1</td>
                                           <td><a><img src="../trains/train1.jpg">Train Schedule</a></td>
                                           <td>" . $d . "</td>
                                           <td>" . $s. " </td>
                                           <td>" . echo "date("h:i d-m-y",$d)" . "</td>
                                           <td> 
                                   </tr>';
                        }
                        else {
                            echo "Error in the code!!! please try again...............";
                        }
                     
                             
                        ?>

                       <script src="" async defer></script>
                   </body>
               </html>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Ticket Booking</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://kit.fontawesome.com/608539d5a6.js" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/@themesberg/flowbite@1.3.0/dist/datepicker.bundle.js"></script>
        <script src="../path/to/@themesberg/flowbite/dist/datepicker.bundle.js"></script>
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        
    </head>
    <body>
      <header class="text-gray-600 body-font">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
          <nav class="flex lg:w-2/5 flex-wrap items-center text-base md:ml-auto">
            <a class="mr-5 hover:text-gray-900" href="home.html">Home</a>
            <a class="mr-5 hover:text-gray-900" href="https://www.railyatri.in/train-ticket?utm_source=ET277dweb&gclid=EAIaIQobChMI8ZHZt7yu9QIV1wkrCh2OFw96EAAYASAAEgLFRfD_BwE"> Trains </a>
            <a class="mr-5 hover:text-gray-900" href="contactus.html">Contact us</a> </a>
            <a class="mr-5 hover:text-gray-900" href="aboutus.html" >About us</a>

          </nav>
          <a class="flex order-first lg:order-none lg:w-1/5 title-font font-medium items-center text-gray-900 lg:items-center lg:justify-center mb-4 md:mb-0">
          <span class="ml-3 text-xl">Railway Management System</span>
          </a>
          <div class="lg:w-2/5 inline-flex lg:justify-end ml-5 lg:ml-0">
            <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0" ><a href="ticket.html">Back</a>
            </button>
          </div>
        </div>
      </header>
                
      

<div class="flex items-center justify-center min-h-screen bg-gray-100">
  <div class="px-8 py-6 mx-4 mt-4 text-left bg-white shadow-lg md:w-1/3 lg:w-1/3 sm:w-1/3">
      <div class="flex justify-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-20 h-20 text-blue-600" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path d="M12 14l9-5-9-5-9 5 9 5z" />
              <path
                  d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
          </svg>
      </div>
      <h3 class="text-2xl font-bold text-center">Book your ticket here</h3>
      <form action="tickets.php" method="post">
          <div class="mt-4">
              <div>
                  <label class="block" for="Name">Enter Your Name<label>
                          <input type="text" placeholder="Name"
                              class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600" id="name" name="name">
              </div>


              <div>
                <label class="block" for="Name">Enter passenger name 1<label>
                        <input type="text" placeholder="Name"
                            class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600" id="name" name="pname1">
              </div>

              <div>
                <label class="block" for="Name">Enter age<label>
                        <input type="text" placeholder="age"
                            class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600" id="name" name="age1">
              </div>

              <div>
                <label class="block" for="Name">Enter address<label>
                        <input type="text" placeholder="address"
                            class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600" id="name" name="address1">
              </div>

              <div>
                <label class="block" for="Name">Enter passenger name 2<label>
                        <input type="text" placeholder="Name"
                            class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600" id="name" name="pname2">
              </div>
              
              <div>
                <label class="block" for="Name">Enter age<label>
                        <input type="text" placeholder="age"
                            class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600" id="name" name="age2">
              </div>

              <div>
                <label class="block" for="Name">Enter address<label>
                        <input type="text" placeholder="address"
                            class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600" id="name" name="address2">
              </div>

              <div>
                <label class="block" for="Name">Enter passenger name 3<label>
                        <input type="text" placeholder="Name"
                            class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600" id="name" name="pname3">
              </div>
              
              <div>
                <label class="block" for="Name">Enter age<label>
                        <input type="text" placeholder="age"
                            class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600" id="name" name="age3">
              </div>

              <div>
                <label class="block" for="Name">Enter address<label>
                        <input type="text" placeholder="address"
                            class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600" id="name" name="address3">
              </div>
              
              
              
                  <div class="mt-4">
                  <label class="block">Select the Coach Class</label>
                  <select class="form-select form-select-lg mt-4
                    appearance-none
                    block
                    w-full
                    px-4
                    py-2
                    text-xl
                    font-normal
                    text-gray-700
                    bg-white bg-clip-padding bg-no-repeat
                    border border-solid border-gray-300
                    rounded
                    transition
                    ease-in-out
                    m-0
                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label=".form-select-lg example" id="coach_type" name="coach_type">
                      <option selected>Open this select menu</option>
                      <option value="1">sleeper</option>
                      <option value="2">first class</option>
                      <option value="3">AC chair car</option>
                      <option value="4">second seater</option>
                      <option value="5">AC two tier</option>
                    </select>
                  </div>

              <div class="flex">
                  <button type="submit" name="submit" class="w-full px-6 py-2 mt-4 text-white bg-blue-600 rounded-lg hover:bg-blue-900" value="submit"> <a href="index.php"> Submit</a></button>
              </div>
              </div>
          </div>
      </form>
  </div>


        <script src="" async defer></script>
    </body>
</html>