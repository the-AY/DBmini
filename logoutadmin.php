
<?php
   session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["password"]);
   
   echo 'You have cleaned session Redirecting to LOGIN PAGE';
   header('Refresh: 2; URL = loginadmin.php');
?>

