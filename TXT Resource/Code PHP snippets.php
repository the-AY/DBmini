NOTE:- things match using the name ="" so inside  $variable=$row['name'];
$sql="INSERT INTO `tablename` (`Column`, `Column`, `Column`)  VALUES 
    ('$variable', '$variable', '$variable', '$variable')";
    Here Coloumn is the database coloumn cross verify for insertion

    login -> create c_id

    <label for="DISPLAY">DISPLAY </label>
                  <select name="DISPLAY" id="DISPLAY">
               <option value=""></option>
               <option value=""></option>
               <option value=""></option>
               <option value=""></option>
               <option value=""></option>
               <option value=""></option>
               <option value=""></option>
               <option value=""></option>
               <option value=""></option>
               <option value=""></option>
               <option value=""></option>
               <option value=""></option>
                
             </select>

    trains T_NO
    
    <label for="status">TRAIN NO </label>
                  <select name="tno" id="tno">
               <option value="RAJDHANI EXP (12431)"> RAJDHANI EXP (12431)</option>
               <option value="MATSYAGANDA EXP (12620)">< MATSYAGANDA EXP (12620)/option>
               <option value="NETHRAVATHI EXP (16346)">NETHRAVATHI EXP (16346)</option>
               <option value="MAJN CSMT EXP (12134)">MAJN CSMT EXP (12134)</option>
               <option value="MANGLADWEEP EXP (12617)">MANGLADWEEP EXP (12617)</option>  
             </select>

             <label for="tst">TRAIN Stations </label>
                  <select name="tst" id="tst">
               <option value="TRIVANDRUM CNTL-TVC ">TRIVANDRUM CNTL-TVC </option>
               <option value="KOLLAM JN-QLN ">KOLLAM JN-QLN </option>
               <option value="ALLEPPEY-ALLP ">ALLEPPEY-ALLP </option>
               <option value="ERNAKULAM JN-ERS ">ERNAKULAM JN-ERS </option>
               <option value="THRISUR-TCR">THRISUR-TCR</option>  
               <option value="SHORANUR JN-SRR ">SHORANUR JN-SRR </option>
               <option value="KOZHIKKODE-CLT ">KOZHIKKODE-CLT </option>
               <option value="KANNUR-CAN">KANNUR-CAN</option>
               <option value="KASARAGOD-KGQ  ">KASARAGOD-KGQ  </option>
               <option value="MANGALURU JN-MAJN ">MANGALURU JN-MAJN </option> 
               <option value="UDUPI-UD  ">UDUPI-UD  </option>
               <option value="KARWAR-KAWR ">KARWAR-KAWR </option>
               <option value="MADGAON-MAO ">MADGAON-MAO </option>
               <option value="RATNAGIRI-RN ">RATNAGIRI-RN </option>
               <option value="PANVEL-PNVL  ">PANVEL-PNVL  </option> 
               <option value="VASAI ROAD-BSR ">VASAI ROAD-BSR </option>
               <option value="VADODARA JN-BRC ">VADODARA JN-BRC </option> 
               <option value="KOTA JN-KOTA  ">KOTA JN-KOTA  </option>
               <option value="H NIZAMUDDIN-NZM ">H NIZAMUDDIN-NZM </option> 
            
                </select>

                /**
 * Set minimum number of characters
 *
 * @link https://wpforms.com/developers/how-to-set-a-minimum-number-of-characters-on-a-text-form-field/
 *
 */
 
 
function wpf_dev_char_min() {
    ?>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            jQuery('.wpf-char-min input').prop('minLength', 8);
            jQuery('.wpf-char-min textarea').prop('minLength', 20);
            jQuery.extend(jQuery.validator.messages, {
                minlength: jQuery.validator.format("Please enter at least {0} characters"),
            });
 });
    </script>
    <?php
}
add_action( 'wpforms_wp_footer_end', 'wpf_dev_char_min' );


TRIVANDRUM CNTL-TVC 
KOLLAM JN-QLN 
ALLEPPEY-ALLP 
ERNAKULAM JN-ERS 
THRISUR-TCR
SHORANUR JN-SRR 
KOZHIKKODE-CLT 
KANNUR-CAN
KASARAGOD-KGQ  
MANGALURU JN-MAJN  
UDUPI-UD  
KARWAR-KAWR 
MADGAON-MAO 
RATNAGIRI-RN  
PANVEL-PNVL  
VASAI ROAD-BSR  
VADODARA JN-BRC 
KOTA JN-KOTA  
H NIZAMUDDIN-NZM  


# code for toatl Price
$var= SELECT `price` FROM `table_name` WHERE C_ID=$username
$tp= $var*0.05;


Display all table details




<?php
  include "config.php";

  $sql= "Select * from `tablename`;";

  $result= mysqli_query($connect,$sql);

  if($result){
      while($row=mysqli_fetch_assoc($result))
      {
        
        $=$row[''];
        $=$row[''];
        $=$row[''];
        $=$row[''];
        $ =$row[''];
        
        echo '<tr>
        <td>'.$'</td>
        <td>'.$'</td>
        <td>'.$.'</td>
        <td>'.$.'</td>
        <td>'.$'</td>
        <td>
                <button ><a href="update.php?updateid='.$.'">Update</a></button>
                <button ><a href="emp_update.php?deleteid='.$.'">Delete</a></button>
    </td>
    </tr>';

      }
    }   
  ?>

  Add new table row ie:- book
  <?php
$host = "localhost";
$user ="root";
$pwd = "";
$db ="dbmini";
$connect = mysqli_connect($host,$user,$pwd,$db);
session_start();
if(isset($_POST[''])){
    $Brand=$_POST[''];
    $MachineType = $_POST[''];
    $MaintenanceCost = $_POST[''];
    $PowerUsage = $_POST[''];
    $sql="INSERT INTO `tablename` (``, ``, `, ``)  VALUES 
    ('$variable', '$variable', '$variable', '$variable')";
    
    $connect->query($sql);

    $connect->close();
}
?>


login code snippet

<?php
            $msg = '';
            
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
				
               if ($_POST['username'] == 'username' && 
                  $_POST['password'] == 'password') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'username';
                  
                  echo 'You have entered valid use name and password';
               }else {
                  $msg = 'Wrong username or password';
               }
            }
         ?>


<form class = "form-signin" role = "form" 
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method = "post">
            <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
            <input type = "text" class = "form-control" 
               name = "username" placeholder = "username = username" 
               required autofocus></br>
            <input type = "password" class = "form-control"
               name = "password" placeholder = "password = password" required>
            <button class = "btn btn-lg btn-primary btn-block" type = "submit" 
               name = "login">Login</button>
         </form>
			
         Click here to clean <a href = "logout.php" tite = "Logout">Session.
         
      </div> 
      
   </body>
</html>

Logout.php


<?php
   session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["password"]);
   
   echo 'You have cleaned session';
   header('Refresh: 2; URL = login.php');
?>



<?php
$user = "root";
Shost="localhost";
$pwd = ""; 
$db = "dbmini"; 
$conn = mysqli_connect($host, $user, $pwd, $db);
 echo "Error Connecting the Database ";
if(!$conn)
{
}
if(isset($_POST['login']))
{ 
$username = $_POST['username']; 
$password = $_POST['password'];
$result-mysqli_query($conn, $sql); $check=mysqli_fetch_array($result);
if(isset($check))
$sql="SELECT * FROM "customer` WHERE `C_ID="$user" and "PASSWORD` = '$password';";
{ 
   header('Location: index.php');
}
else
{
echo "<script>alert("Incorrect username or password")</script>";
}
}

<?php

if($current!=0)
{
$current= $dbcurrent;

$newcurrent=$dbcurrent-$QTYticket;

$sql="$newcurrent  "

}
else
display "alert train is full no more booking allowed"
