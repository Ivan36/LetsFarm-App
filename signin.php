<?php
include"function/dbconfig.php";

if (isset($_POST)){
  //check to see if the user exists, compare passwords, redirect to landing page if errors
  $_SESSION['error']['login'] = [];
  $notMatch = false;
  $email = mysqli_real_escape_string($con,$_POST['email']);
  $password = mysqli_real_escape_string($con, $_POST['password']);
  $query = "SELECT * FROM users where email = '{$email}'";
  $result = mysqli_query($con, $query);
  if ($row = mysqli_fetch_assoc($result)) {
    if ($row['password'] == $password && $row['active'] != '0') {
      $_SESSION['username'] = $row['username'];
      $_SESSION['id'] = $row['id'];
      
    
      // header('Location: dashboard.php');
if ($row['usertype'] == 'farmer') {
// header("location:home.php");
 
  echo "<html><br><br><br><div id='loading' style='color:green;text-align: center;font-weight: 200;font-family: Georgia, Times New Roman, serif;font-size:20px;'><b> login successful welcome farmer go ahead and user our system..<center><p><img src='loading-img/load.gif' style='margin-top:8%;'></p></center></div></html>";
        header( "refresh:6;url=farmer/farmerindex.php" );
} elseif ($row['usertype'] == 'admin') {
// header("location:staff/manager/index.php");
    echo "<html><br><br><br><div id='loading' style='color:green;text-align: center;font-weight: 200;font-family: Georgia, Times New Roman, serif;font-size:20px;'><b> Login as Administrator successful..<center><p><img src='loading-img/load.gif' style='margin-top:8%;'></p></center></div></html>";
        header( "refresh:6;url=Admin/index.php" );
}
elseif ($row['usertype'] == 'customer') {
// header("location:staff/manager/index.php");
   
 echo "<html><br><br><br><div id='loading' style='color:green;text-align: center;font-weight: 200;font-family: Georgia, Times New Roman, serif;font-size:20px;'><b> login successful as customer go ahead and user our system..<center><p><img src='loading-img/load.gif' style='margin-top:8%;'></p></center></div></html>";
        header( "refresh:6;url=customer/customerindex.php" );
}
elseif ($row['usertype'] == 'expert') {
// header("location:staff/manager/index.php");
 echo "<html><br><br><br><div id='loading' style='color:green;text-align: center;font-weight: 200;font-family: Georgia, Times New Roman, serif;font-size:20px;'><b> login successful as an Expert go ahead and user our system..<center><p><img src='loading-img/load.gif' style='margin-top:8%;'></p></center></div></html>";
        header( "refresh:6;url=expert/expertindex.php" );
}
else{
    ?>
<!-- <script type="text/javascript">
    window.alert("wrong password or username");
    window.location.href = "index.php";
</script> -->
<?php
echo "<html><br><br><br><div id='loading' style='color:red;text-align: center;font-weight: 200;font-family: Georgia, Times New Roman, serif;font-size:20px;'><b> wrong password or username please try again with correct username and password..<center><p><img src='loading-img/load.gif' style='margin-top:8%;'></p></center></div></html>";
        header( "refresh:6;url=index.php" );
//  echo"wrong password or username";
// header("location:index.php");  

}

    }
    else {
      $notMatch = true;
    }
  }
  else {
   
echo "<html><br><br><br><div id='loading' style='color:red;text-align: center;font-weight: 200;font-family: Georgia, Times New Roman, serif;font-size:20px;'><b> wrong password or username please try again with correct username and password..<center><p><img src='loading-img/load.gif' style='margin-top:8%;'></p></center></div></html>";
        header( "refresh:6;url=index.php" );
  }
  if ($notMatch) {
    ?>
<!-- <script type="text/javascript">
    window.alert("Hey User your Account is not activated and you dont permision to use the system try again later");
    window.location.href = "index.php";
</script> -->
<?php
echo "<html><br><br><br><div id='loading' style='color:red;text-align: center;font-weight: 200;font-family: Georgia, Times New Roman, serif;font-size:20px;'><b> Hey User your Account is not activated and you dont permision to use the system try again later..<center><p><img src='loading-img/load.gif' style='margin-top:8%;'></p></center></div></html>";
        header( "refresh:6;url=index.php" );
  }
}

?>