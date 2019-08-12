<?php
include"../dbconnection.php";

// -----------------------------register product---------------------------

if (isset($_POST['productsave'])) {

   $productname  =  $_POST['productName'];
   $productimage  =  $_POST['productImage'];
   $quantity  =  $_POST['productQuantity'];
   $price  =  $_POST['productPrice'];
   $date =  $_POST['stockDate'];


   $sql =$conn-> query("INSERT INTO products(productName,productImage,productQuantity,productPrice,stockdate) values('$productname','$productimage','$quantity','$price','$date')");

   ?>
   <script type="text/javascript">
       window.alert("product registered successfully");
       window.location.href="customerindex.php";


   </script>


   <?php 
}

