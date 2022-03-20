
<?php
   session_destroy();
   // unset($_SESSION["username"]);
   // unset($_SESSION["password"]);
   
   echo 'You have cleaned session Redirecting to LOGIN PAGE';
   header('Refresh: 2; URL = index.php');
?>

