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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        
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
      
      <form action="ticketbooking1.php" method="post">
          <div class="mt-4">
              
            <div class="mt-4">
              <label class="block">Departure Station</label>
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
                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label=".form-select-lg example" id="coach_type" name="src">
                  <option selected>---Staions---</option>
                    <?php
                    $stations=array("(MAQ)MANGALURU CNTL","(SL)SURATHKAL","(MULK)MULKI","(UD)UDUPI","(KUDA)KUNDAPURA","(BYNR)MOOKAMBIKA ROAD","(BTJL)BHATKAL","(MRDW)MURDESHWAR","(HNA)HONNAVAR","(KT)KUMTA","(GOK)GOKARNA ROAD","(ANKL)ANKOLA","(KAWR)KARWAR","(MAO)MADGAON","(KUDL)KUDAL","(RN)RATNAGIRI","(CHI)CHIPLUN","(PNVL)PANVEL","(TNA)THANE","(LTT)LOKMANYATILAK T","(TVC)TRIVANDRUM CNTL","(QLN)KOLLAM JN","(ALLP)ALLEPPEY","(ERS)ERNAKULAM JN","(TCR)THRISUR","(SRR)SHORANUR JN","(CLT)KOZHIKKODE","(CAN)KANNUR","(KGQ)KASARAGOD","(MAJN)MANGALURU JN","(BSR)VASAI ROAD","(BRC)VADODARA JN","(KOTA)KOTA JN","(NZM)H NIZAMUDDIN","(VAK)VARKALASIVAGIRI","(KPY)KARUNAGAPALLI","(KYJ)KAYANKULAM JN","(HAD)HARIPPAD","(AMPA)AMBALAPPUZHA","(SRTL)CHERTHALA","(AWY)ALUVA","(KTU)KUTTIPPURAM","(TIR)TIRUR","(PGI)PARPANANGADI","(BDJ)VADAKARA","(KRMI)KARMALI","(KKW)KANKAVALI","(CSMT)C SHIVAJI MAH T","(PTB)PATTAMBI","(FK)FEROK","(QLD)QUILANDI","(TLY)THALASSERY","(PAZ)PAYANGADI","(NLE)NILESHWAR","(KZE)KANHANGAD");
                    foreach($stations as $i){
                        echo "<option value='$i' name='i'>$i</option>";
                    }
                    ?>
                </select>
              </div>

              <div class="mt-4">
              <label class="block">Destination</label>
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
                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label=".form-select-lg example" id="coach_type" name="dest">
                  <option selected>---Stations---</option>
                    <?php
                    $stations=array("(MAQ)MANGALURU CNTL","(SL)SURATHKAL","(MULK)MULKI","(UD)UDUPI","(KUDA)KUNDAPURA","(BYNR)MOOKAMBIKA ROAD","(BTJL)BHATKAL","(MRDW)MURDESHWAR","(HNA)HONNAVAR","(KT)KUMTA","(GOK)GOKARNA ROAD","(ANKL)ANKOLA","(KAWR)KARWAR","(MAO)MADGAON","(KUDL)KUDAL","(RN)RATNAGIRI","(CHI)CHIPLUN","(PNVL)PANVEL","(TNA)THANE","(LTT)LOKMANYATILAK T","(TVC)TRIVANDRUM CNTL","(QLN)KOLLAM JN","(ALLP)ALLEPPEY","(ERS)ERNAKULAM JN","(TCR)THRISUR","(SRR)SHORANUR JN","(CLT)KOZHIKKODE","(CAN)KANNUR","(KGQ)KASARAGOD","(MAJN)MANGALURU JN","(BSR)VASAI ROAD","(BRC)VADODARA JN","(KOTA)KOTA JN","(NZM)H NIZAMUDDIN","(VAK)VARKALASIVAGIRI","(KPY)KARUNAGAPALLI","(KYJ)KAYANKULAM JN","(HAD)HARIPPAD","(AMPA)AMBALAPPUZHA","(SRTL)CHERTHALA","(AWY)ALUVA","(KTU)KUTTIPPURAM","(TIR)TIRUR","(PGI)PARPANANGADI","(BDJ)VADAKARA","(KRMI)KARMALI","(KKW)KANKAVALI","(CSMT)C SHIVAJI MAH T","(PTB)PATTAMBI","(FK)FEROK","(QLD)QUILANDI","(TLY)THALASSERY","(PAZ)PAYANGADI","(NLE)NILESHWAR","(KZE)KANHANGAD");
                    foreach($stations as $j){
                        echo "<option value='$j' name='j' >$j</option>";
                    }
                    ?>
                </select>

              </div>
              <div>

              <label class="block" for="doj">Enter Date of Departure</label></div>
                <!-- <input type="date" placeholder="Select date"
                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600" id="doj" name="doj" /> -->
                
               
                  
                  <script>
                    /* date objects are created with the new date() const*/
                    $(document).ready(function(){
                      $(function() {
                        var dttoday= new Date();
                        var month=dttoday.getMonth()+1;
                        var day=dttoday.getDate();
                        var year=dttoday.getFullYear();
                        if(month< 10)
                          month='0'+month.toString();
                        if(day< 10)
                          day='0' +day.toString();
                        var maxdate = year + '-' + month + '-' + day;
                        $('#datehold').attr('min',maxdate);
                      });
                    })
                  </script>
                   <div class="relative">
                  <input  name="doj"  type="date" id="datehold" class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600" placeholder="Select date">
                  </div>

              <div class="flex">
                  <button type="submit" name="submit"  class="w-full px-6 py-2 mt-4 text-white bg-blue-600 rounded-lg hover:bg-blue-900" value="submit"><a href="ticketbooking1.php">Book</a></button>
              </div>
              </div>
          </div>
      </form>
  </div>


        <script src="" async defer></script>
    </body>
</html>