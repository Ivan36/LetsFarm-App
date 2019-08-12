<?php 
include"customermenu.php";

include("../function/dbconfig.php");
$selected = mysqli_query($conn, "SELECT * FROM products");
 ?>
 <link rel="stylesheet" type="text/css" href="../css/w3.css">
 <link href="css/client.css" rel="Stylesheet">
  <link href="css/responsive.css" rel="Stylesheet">
  <link href="css/bootstrap.min.css" rel="Stylesheet">
  <link href="css/bootstrap.css" rel="Stylesheet">
  <link href="css/bootstrap-theme.min.css" rel="Stylesheet">
  <script src="js/jquery-1.11.3.js" type="text/javascript"></script>
  <script src="js/jquery-1.11.3.min (1).js" type="text/javascript"></script>
  <script src="js/bootstrap.min.js" type="text/javascript"></script>
  <script src="js/script.js" type="text/javascript"></script>
 
<div class="w3-container" style="padding:28px 16px" id="lawyer">
  <h3 class="w3-center">Our Products</h3>
  <p class="w3-center w3-large"></p>
  <div class="w3-row-padding w3-grayscale" style="margin-top:1%;">
    <?php
           while ($personrow = mysqli_fetch_array($selected)) {
            // $personid = $personrow['LandOwnersID'];
            // $FirstName = $personrow['FirstName'];
            $pID = $personrow['pID'];
            $productName = $personrow['productName'];
            $productImage = $personrow['productImage'];
            $productQuantity = $personrow['productQuantity'];
            $productprice = $personrow['productPrice'];
            $stockdate = $personrow['stockDate'];
            ?>
    <div class="w3-col l3 m6 w3-margin-bottom">
         
      <div class="w3-card">
        <!-- <img src="/w3images/team2.jpg" alt="Alex" > -->
       <center> <p><h5><b>Product Image: </b></h5><img src="../user_images/<?php echo $personrow['productImage']; ?>" class="img-rounded" style="width:50%; height:20%;"></p></center>
        <div class="w3-container">
          <p><b> Product name: <?php echo "$productName" ?></b></p>
          <p class="w3-opacity"></p>
          <p>Quantity: <?php echo "$productQuantity";  ?></p>
          <p>Price: <?php echo "$productprice"; ?> Ugx</p>
          <p>Price: <?php echo "$stockdate"; ?></p>
          <p><button class="w3-button w3-light-grey w3-block"> click to order</button></p>
        </div>
      </div>
    </div>
    <?php } ?>
  </div>

</div>
