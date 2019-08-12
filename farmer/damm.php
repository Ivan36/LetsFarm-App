<!DOCTYPE>
<html>
<?php
$conn=mysqli_connect("localhost","root","","lets_farm_db");
$selected = mysqli_query($conn, "SELECT * FROM products");
//$i = 1;
?>
<head>
    <link href="css/client.css" rel="Stylesheet">
    <link href="css/responsive.css" rel="Stylesheet">
    <link href="css/bootstrap.min.css" rel="Stylesheet">
    <link href="css/bootstrap.css" rel="Stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="Stylesheet">
    <script src="js/jquery-1.11.3.js" type="text/javascript"></script>
    <script src="js/jquery-1.11.3.min (1).js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/script.js" type="text/javascript"></script>
    <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin: 1% 1%;
      margin-bottom: 0;
      border-radius: 5px;
  }

  /* Add a gray background color and some padding to the footer */
  footer {
      background-color: #f2f2f2;
      padding: 25px;
      border-radius: 5px;
  }
</style>
<script type="text/javascript">
    function paymentnfo() {
        var radios = document.getElementsByName('paymentMode');

        for (var i = 0, length = radios.length; i < length; i++) {
            if (radios[i].checked) {
                    // do whatever you want with the checked radio

                    if (radios[i].value === "MobileMoney") {
                        alert("Send the Money to this Number: 0776231019 and add the reason as:Product Name.We will give you feedback");
                    }
                    if (radios[i].value === "AccountNo") {
                        alert("Deposit the money in Housing Finance Bank, Account Number:4356278908, Mbarara branch.We will give you feedback");
                    }
                    if (radios[i].value === "Cash") {
                        alert("Make sure u pay the delivery person");
                    }
                    // only one radio can be logically checked, don't check the rest
                    break;
                }
            }
        }
    </script>
    <title>product</title>
</head>
<body>
    <?php
    include 'farmermenu.php';
    ?>
    

    <div class="b-container">
        <div class="row">

           <h2 class="dischead" style="color:green;text-align: center;">Products</h2>

           <?php
           while ($personrow = mysqli_fetch_array($selected)) {
            $personid = $personrow['pID'];
            $productname = $personrow['productName'];
            ?>
        </div>
    </div>
    <div class="b-container">
        <div class="col-sm-4">


             <div class='panel panel-info'>
                <div class='panel-body'>
                    <div class="row">
                        <div class="col-sm-6">
                           <img src="../user_images/<?php echo $personrow['productImage']; ?>" class="img-rounded" width="160" height="100" />
                       </div>

                       <div class="col-sm-6">
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <?php
                        echo "Product No: $personid"; echo "<br />\n";
                        ?>
                         &nbsp;&nbsp;&nbsp;&nbsp;
                         <?php echo " Item: $productname"; ?> 
                    </div>
                </div>
           
            <div class='panel-footer'>
                <?php
               // echo $personrow['productDesc'];echo "&nbsp;";
               // echo $personid;
                ?>
                <a href="" data-toggle="modal" data-target="#<?php echo $personid ?>" style="color:green;" >Click for more information</a>

            </div>
             </div>

        </div>

    </div>

</div>

</div>
</div>


<div id="<?php echo $personid ?>" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn btn-info close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Information Form</h4>
            </div>
            <div class="modal-body">
                <form method="POST" action="process.php">
                	<div class="col-sm-3"></div>
                    <div class="col-sm-9">
                        <p><h5><b>Product Image: </b></h5><img src="../user_images/<?php echo $personrow['productImage']; ?>" class="img-rounded" width="250" height="200" /></p>

                        <p><b>Product Name: </b><?php echo $personrow['productName']; echo "<br />\n"; ?></p> <p><b>Quantity in sock: </b><?php echo $personrow['productQuantity']; ?></p>
                    </p>
                    <p><b>Product Price: </b><?php echo $personrow['productPrice']; ?></p>
                    <p><b>Stock Date: </b><?php echo $personrow['stockDate']; ?></p>
                    <hr/>



                    <!--<p id="form_desc" value="" style="margin-top:40px;color:green;"></p>-->
                    <!-- <input type="hidden" name="userid" value="<?php //echo $uid; ?>"/> -->
                    <input type="hidden" id="form_id" name="pid" value="<?php echo $personrow['pID']; ?>"/>
         
     </div>


     <div class="modal-footer">
       
        <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close Form</button>-->
    </div>
    </div>
</form>
</div>

</div>
</div>
</div>
</body>
</html>
<?php
}
