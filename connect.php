  <?php

$conn=mysqli_connect("localhost","root","","trials");
if (!$conn) {
	die("An error occured".mysqli_connect_error());
}
else{
echo "Connected";
}

if (isset($_POST["submit"])) {
 	$fname =$_POST["product_name"];
	$lastname =$_POST["quantity"];
	$title =$_POST["price"];
	$department =$_POST["owner"];
	$address =$_POST["address"];
	$contacts =$_POST["contacts"];
	

		$sql="INSERT into products(product_name,quantity,price,owner,address,contacts)values(?,?,?,?,?,?)";

		$stmt=mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt,$sql)) {
			echo "Failed to prepare the statement";
		}

		else{
			
			mysqli_stmt_bind_param($stmt,"ssssss",$fname,$lastname,$title,$department,$address,$contacts);
			mysqli_stmt_execute($stmt);
			//header("Location: view.php");
				echo "<script> alert('product added succesfully')</script>";
      echo "<script> window.open('view.php','_self')</script>";
		}
	
	
}



?>