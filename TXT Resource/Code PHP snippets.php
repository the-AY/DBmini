NOTE:- things match using the name ="" so inside  $variable=$row['name'];
$sql="INSERT INTO `tablename` (`Column`, `Column`, `Column`)  VALUES 
    ('$variable', '$variable', '$variable', '$variable')";
    Here Coloumn is the database coloumn cross verify for insertion

    login -> create c_id

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
