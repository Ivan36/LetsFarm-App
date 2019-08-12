<?php

$conn=mysqli_connect("localhost","root","","lets_farm_db");
if (!$conn) {
	die("An error occured".mysqli_connect_error());
}
else{
echo "connected";

}
if (isset($_POST['submit'])) {
 	$username =$_POST['username'];
 	$usertype =$_POST['usertype'];
	$email =$_POST['email'];
	$password =$_POST['password'];
	

		$sql="INSERT into users (username,email,password,usertype) values (?,?,?,?)";

		$stmt=mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt,$sql)) {
			echo "Failed to prepare the statement";
		}

		else{
			
			mysqli_stmt_bind_param($stmt,"ssss",$username,$email,$password,$usertype);
			mysqli_stmt_execute($stmt);
		echo "<script> alert('account saved succesfully')</script>";
      echo "<script> window.open('index.php','_self')</script>";
		
		}
	
	

}
?>