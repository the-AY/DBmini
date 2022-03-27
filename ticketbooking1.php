

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
      
                   <div>
                  <label class="block" for="trains"><h3> Trains Available are</h3> </label>
              </div>
              <table>
              <tr>
                                       <th>Train</th>
                                       <th>Schedule</th>
                                       <th>Destination</th>
                                       <th>Source</th>
                                       <th>Runs On</th>
                                   </tr>
                        <?php
                        include 'config.php';
                            session_start();
                            $username = $_SESSION["username"];
                            $sr;
                            $de;
                            $tname=array();
                            $source=$_POST['src'];
                            $dest=$_POST['dest'];
                            $doj=$_POST['doj'];
                         // all the trains have been sorted into array, with elements being the stations they pass through
                        $MAJN_CSMT_EXP=array("(MAJN)MANGALURU JN","(SL)SURATHKAL","(UD)UDUPI","(KUDA)KUNDAPURA","(BYNR)MOOKAMBIKA ROAD","(BTJL)BHATKAL","(KT)KUMTA","(KAWR)KARWAR","(MAO)MADGAON","(KRMI)KARMALI","(KKW)KANKAVALI","(RN)RATNAGIRI","(PNVL)PANVEL","(TNA)THANE","(CSMT)C SHIVAJI MAH T");
                        $MANGLADWEEP_EXP=array("(ERS)ERNAKULAM JN","(AWY)ALUVA","(TCR)THRISUR","(SRR)SHORANUR JN","(PTB)PATTAMBI","(KTU)KUTTIPPURAM","(TIR)TIRUR","(PGI)PARPANANGADI","(FK)FEROK","(CLT)KOZHIKKODE","(QLD)QUILANDI","(BDJ)VADAKARA","(TLY)THALASSERY","(CAN)KANNUR","(PAZ)PAYANGADI","(NLE)NILESHWAR","(KZE)KANHANGAD","(KGQ)KASARAGOD","(NZM)H NIZAMUDDIN");
                        $MATSYAGANDHA_EXP=array("(MAQ)MANGALURU CNTL","(SL)SURATHKAL","(MULK)MULKI","(UD)UDUPI","(KUDA)KUNDAPURA","(BYNR)MOOKAMBIKA ROAD","(BTJL)BHATKAL","(MRDW)MURDESHWAR","(HNA)HONNAVAR","(KT)KUMTA","(GOK)GOKARNA ROAD","(ANKL)ANKOLA","(KAWR)KARWAR","(MAO)MADGAON","(KUDL)KUDAL","(RN)RATNAGIRI","(CHI)CHIPLUN","(PNVL)PANVEL","(TNA)THANE","(LTT)LOKMANYATILAK T");
                        $NETHRAWATHI_EXP=array("(TVC)TRIVANDRUM CNTL","(VAK)VARKALASIVAGIRI","(QLN)KOLLAM JN","(KPY)KARUNAGAPALLI","(KYJ)KAYANKULAM JN","(HAD)HARIPPAD","(AMPA)AMBALAPPUZHA","(SRTL)CHERTHALA","(ERS)ERNAKULAM JN","(AWY)ALUVA","(TCR)THRISUR","(SRR)SHORANUR JN","(KTU)KUTTIPPURAM","(TIR)TIRUR","(PGI)PARPANANGADI","(CLT)KOZHIKKODE","(BDJ)VADAKARA","(TLY)THALASSERY","(LTT)LOKMANYATILAK T");
                        $RAJDHANI_EXP=array("(TVC)TRIVANDRUM CNTL","(QLN)KOLLAM JN","(ALLP)ALLEPPEY","(ERS)ERNAKULAM JN","(TCR)THRISUR","(SRR)SHORANUR JN","(CLT)KOZHIKKODE","(CAN)KANNUR","(KGQ)KASARAGOD","(MAJN)MANGALURU JN","(MAQ)MANGALURU CNTL","(UD)UDUPI","(KAWR)KARWAR","(MAO)MADGAON","(RN)RATNAGIRI","(PNVL)PANVEL","(BSR)VASAI ROAD","(BRC)VADODARA JN","(KOTA)KOTA JN","(NZM)H NIZAMUDDIN");
                       
                        //if conditions for whether the train goes to the source and destinations, then the table will be displayed which shows train, source destination etc
                        
                        if (in_array($source, $MAJN_CSMT_EXP)  ) {
                            if (in_array($dest, $MAJN_CSMT_EXP)) {
                            $sr="(MAJN)MANGALURU JN";
                            $de="(CSMT)C SHIVAJI MAH T";
                            array_push($tname,"MAJN_CSMT_EXP_12134") ;

                                    echo '<tr>
                                           <td>MAJN_CSMT_EXP_12134</td>
                                           <td><a href="../trains/MAJN_CSMT_EXP.jpg">Train Schedule</a></td>
                                           <td>' . $de . '</td>
                                           <td>' . $sr. ' </td>
                                           <td>MON, TUE, WED, THURS, FRI, SAT, SUN</td> 
                                   </tr>';
                            }

                        }
                        if (in_array($source, $MANGLADWEEP_EXP) and in_array($dest, $MANGLADWEEP_EXP)) {
                            $sr="(ERS)ERNAKULAM JN";
                            $de="(NZM)H NIZAMUDDIN";
                            array_push($tname,"MANGLADWEEP_EXP_12617");

                                    echo '<tr>
                                           <td>MANGLADWEEP_EXP_12617</td>
                                           <td><a href="../trains/MANGLADWEEP_EXP.jpg">Train Schedule</a></td>
                                           <td>' . $de . '</td>
                                           <td>'. $sr. ' </td>
                                           <td>MON, TUE, WED, THURS, FRI, SAT, SUN</td> 
                                   </tr>';

                        }
                        if (in_array($source, $MATSYAGANDHA_EXP) and in_array($dest, $MATSYAGANDHA_EXP)) {
                            $sr="(MAQ)MANGALURU CNTL";
                            $de="(LTT)LOKMANYATILAK T";
                            array_push($tname,"MATSYAGANDHA_EXP_12620");

                                    echo '<tr>
                                           <td>MATSYAGANDHA_EXP_12620</td>
                                           <td><a href="trains\MATSYAGANDHA_EXP.jpg">Train Schedule</a></td>
                                           <td>' . $de . '</td>
                                           <td>' . $sr. ' </td>
                                           <td>MON, TUE, WED, THURS, FRI, SAT, SUN</td>
                                   </tr>';

                        }
                        if (in_array($source, $NETHRAWATHI_EXP) and in_array($dest, $NETHRAWATHI_EXP)) {
                            $sr="(TVC)TRIVANDRUM CNTL";
                            $de="(LTT)LOKMANYATILAK T";
                            array_push($tname,"NETHRAWATHI_EXP_16346");
                                    echo '<tr>
                                           <td>NETHRAWATHI_EXP_16346</td>
                                           <td><a href="../trains/NETHRAWATHI_EXP.jpg">Train Schedule</a></td>
                                           <td>' . $de . '</td>
                                           <td>' . $sr. ' </td>
                                           <td>MON, TUE, WED, THURS, FRI, SAT, SUN</td>
                                   </tr>';

                        }
                        if (in_array($source, $RAJDHANI_EXP) and in_array($dest, $RAJDHANI_EXP)) {
                            $sr="(TVC)TRIVANDRUM CNTL";
                            $de="(NZM)H NIZAMUDDIN";
                            array_push($tname,"RAJDHANI_EXP_12431");
                            echo"
                                    ";
                                    echo '<tr>
                                           <td>RAJDHANI_EXP_12431</td>
                                           <td><a href="../trains/RAJDHANI_EXP.jpg">Train Schedule</a></td>
                                           <td>' . $de . '</td>
                                           <td>' . $sr. ' </td>
                                    
                                           <td>TUE, THURS, FRI</td> 
                                   </tr>';
                        }
                     
                             $conn->close();
                        ?>
              </table>
              

                       <script src="" async defer></script>
                   </body>
               </html>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://kit.fontawesome.com/608539d5a6.js" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/@themesberg/flowbite@1.3.0/dist/datepicker.bundle.js"></script>
        <script src="../path/to/@themesberg/flowbite/dist/datepicker.bundle.js"></script>
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        
    </head>
    <body>
      
                
      

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

      <!-- form action -->
      <form action="tickets.php" method="post">

          < class="mt-4">

          <div class="mt-4">
                  <label class="block">Select the Train</label>
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
                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label=".form-select-lg example" id="coach_type" name="train">
                      <option selected disabled>--Train--</option>
                      <?php
                      for($i=0;$i<count($tname);$i++) {
                        echo "<option value='$tname[$i]' name='i'>$tname[$i]</option>";
                      }
                      ?>
                    </select>
                  </div>
                  <label class="block">Departure Staion</label>
    
                  <div class="flex justify-center">
                    <div class="mb-3 xl:w-96">
                      <select class="form-select
                        appearance-none
                        block
                        w-full
                        px-3
                        py-1.5
                        text-base
                        font-normal
                        text-gray-700
                        bg-white bg-clip-padding bg-no-repeat
                        border border-solid border-gray-300
                        rounded
                        transition
                        ease-in-out
                        m-0
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="src" aria-label="Disabled select example">
                      <?php
                      echo "<option value='$source'>$source</option>";
                      ?>
                      </select>
                    </div>
                  </div>
                  <label class="block">Destination</label>
                  <div class="flex justify-center">
                    <div class="mb-3 xl:w-96">
                      <select class="form-select
                        appearance-none
                        block
                        w-full
                        px-3
                        py-1.5
                        text-base
                        font-normal
                        text-gray-700
                        bg-white bg-clip-padding bg-no-repeat
                        border border-solid border-gray-300
                        rounded
                        transition
                        ease-in-out
                        m-0
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="dest" aria-label="Disabled select example" >
                        <?php
                      echo "<option value='$dest'>$dest</option>";
                      ?>
                      </select>
                    </div>
                  </div>
                  <label class="block">Date of Departure</label>
                <!-- <input type="date" placeholder="Select date"
                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600" id="doj" name="doj" /> -->
                
                <div class="relative">
                <select class="form-select
                        appearance-none
                        block
                        w-full
                        px-3
                        py-1.5
                        text-base
                        font-normal
                        text-gray-700
                        bg-white bg-clip-padding bg-no-repeat
                        border border-solid border-gray-300
                        rounded
                        transition
                        ease-in-out
                        m-0
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="doj" aria-label="Disabled select example" >
            
        
                  <?php
                  echo "<option value ='$doj'>$doj</option>";
                  ?>
                  </select>
                  </div>
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