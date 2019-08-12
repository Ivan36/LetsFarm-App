<?php
include"../dbconnection.php";

// -----------------------------register farmer---------------------------

if (isset($_POST['productsave'])) {

     $productname  =  $_POST['productname'];
     $quantity  =  $_POST['quantity'];
     $price  =  $_POST['price'];
     $date =  $_POST['stockdate'];
    

     $sql =$conn-> query("INSERT INTO product(productname,quantity,price,stockdate) values('$productname','$quantity','$price','$date')");

     ?>
<script type="text/javascript">
	window.alert("product registered successfully");
	window.location.href="farmerindex.php";


</script>


     <?php 
}


  ?>