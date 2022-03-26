<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="404style.css" rel="stylesheet">
    <link href="test.css" rel="stylesheet">
    <title>Railway Management System</title>
</head>
<style>
/* Center the loader */
#loader {
  position: absolute;
  left: 50%;
  top: 50%;
  z-index: 1;
  width: 120px;
  height: 120px;
  margin: -76px 0 0 -76px;
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}

#myDiv {
  display: none;
  text-align: center;
}
</style>
</head>
<body onload="myFunction()" style="margin:0;">

<div id="loader"></div>

<div style="display:none;" id="myDiv" class="animate-bottom">
<!DOCTYPE html>
<html lang="en">

<body>
    <header class="text-gray-600 body-font">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
          <nav class="flex lg:w-2/5 flex-wrap items-center text-base md:ml-auto">
            <a class="mr-5 hover:text-gray-900" href="home.html">Home</a>
            <a class="mr-5 hover:text-gray-900" href="https://www.railyatri.in/train-ticket?utm_source=ET277dweb&gclid=EAIaIQobChMI8ZHZt7yu9QIV1wkrCh2OFw96EAAYASAAEgLFRfD_BwE"> Trains </a>
            <a class="mr-5 hover:text-gray-900" href="contactus.html">Contact us</a>
            <a class="mr-5 hover:text-gray-900" href="aboutus.html" >About us</a>
            <a class="mr-5 hover:text-gray-900" href="zaditestnew.php" >test</a>
   
          
             <!-- <a href="homeadmin.html"> Jump to admin console</a>  -->
          </nav>
          <a class="flex order-first lg:order-none lg:w-1/5 title-font font-medium items-center text-gray-900 lg:items-center lg:justify-center mb-4 md:mb-0">
          <span class="ml-3 text-xl">Railway Management System</span>
          </a>
          <div class="lg:w-2/5 inline-flex lg:justify-end ml-5 lg:ml-0">
            <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0" ><a href="logout.php">Logout</a>
            </button>
          </div>
        </div>
      </header>
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-wrap -m-4">
            <div class="p-4 lg:w-1/3">
              <div class="h-full bg-gray-100 bg-opacity-75 px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative">
            <div class="myDIV" > <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3"> Travel Ticket</h1></div>
              <div class="hide"> <p class="leading-relaxed mb-3">Book train Journey Tickets </p></div>
              <a href="ticketbooking.php"> <div class="myDIV" > <h2 class="text-indigo-500 inline-flex items-center">Book Ticket here</h2></div></a>
              <a href="ticketdetails.html">  <div class="myDIV" > <h2 class="text-indigo-500 inline-flex items-center">Display your bookings here</h2></div></a>
              
                <!-- <a href="postbooking.html">  <div class="myDIV" > <h2 class="text-indigo-500 inline-flex items-center">Cancel your ticket here</h2></div></a> -->
                <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4"> 
                  <span class="text-gray-400 inline-flex items-center leading-none text-sm"> </span>
                </div>
              </div>
            </div>
            <div class="p-4 lg:w-1/3">
              <div class="h-full bg-gray-100 bg-opacity-75 px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative">    
                <div class="myDIV"> <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">Postal Ticket</h1></div>
                 <div class="hide"> <p class="leading-relaxed mb-3">Postal/Courier service and ticket books</p></div>
                <a href="postbooking.html">  <div class="myDIV" > <h2 class="text-indigo-500 inline-flex items-center">Booking done for postal/courier services</h2></div></a> 
                <a href="postal_display.php">  <div class="myDIV" > <h2 class="text-indigo-500 inline-flex items-center">Display your bookings here</h2></div></a>
                
                <!-- <a href="cancelpost.php">  <div class="myDIV" > <h2 class="text-indigo-500 inline-flex items-center">Cancel your Order here</h2></div></a> -->
                <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
                  <span class="text-gray-400 mr-3 inline-flex items-center leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                  </span>
                  <span class="text-gray-400 inline-flex items-center leading-none text-sm">             
                  </span>
                </div>
              </div>
            </div>
            <div class="p-4 lg:w-1/3">
              <div class="h-full bg-gray-100 bg-opacity-75 px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative">
              <div class="myDIV" >  <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">Food on rails</h1></div>
              <div class="hide">  <p class="leading-relaxed mb-3">Order food Breakfast/lunch/dinner served in the train </p></div>
              <a href="foodorder.php">  <div class="myDIV" > <h2 class="text-indigo-500 inline-flex items-center">Order Now</h2></div></a>
              <a href="fooddisplay.php">  <div class="myDIV" > <h2 class="text-indigo-500 inline-flex items-center">Display your Orders here</h2></div></a>
              <!-- <a href="">  <div class="myDIV" > <h2 class="text-indigo-500 inline-flex items-center">Cancel your Order here</h2></div></a> -->
              <!-- <a class="text-indigo-500 inline-flex items-center" href="foodbooking.html">Order Food -->
                  <!-- <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="M12 5l7 7 -7 7"></path>
                  </svg> -->
                
                <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
                  <span class="text-gray-400 mr-3 inline-flex items-center leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                  </span>
                  <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    

</div>

<script>
var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 1000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>

</body>
</html>
