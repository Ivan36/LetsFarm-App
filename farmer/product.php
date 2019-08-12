<?php 

include"farmermenu.php";
 ?>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<style type="text/css">
    #dis{
        display:none;
    }
</style>

<div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8" style="margin-top: 5%;">
        <div id="dis">
            <?php
            if (isset($errMSG)) {
                ?>
                <div class="alert alert-danger">
                    <span class="glyphicon glyphicon-info-sign"></span> <strong><?php echo $errMSG; ?></strong>
                </div>
                <?php
            } else if (isset($successMSG)) {
                ?>
                <div class="alert alert-success">
                    <strong><span class="glyphicon glyphicon-info-sign"></span> <?php echo $successMSG; ?></strong>
                </div>
                <?php
            }
            ?>   

        </div>


        <form method='post' action='create.php' enctype='multipart/form-data'>

            <table class='table table-bordered'>

                <tr>
                    <td>PRODUCT NAME</td>
                    <td><input type='text' name='productName' class='form-control' placeholder='Product Name' required /></td>
                </tr>

                <tr>
                    <td>PRODUCT IMAGE</td>
                    <td><input class='input-group' type='file' name='user_image' accept='image/*' />
                    </td>
                </tr>

                <tr>
                    <td>PRODUCT QUANTITY</td>
                    <td><input type='text' name='productQuantity' class='form-control' placeholder='Product QUANTITY' required></td>
                </tr>

                <tr>
                    <td>PRODUCT PRICE</td>
                    <td><input type='text' name='productPrice' class='form-control' placeholder='Product Price' required></td>
                </tr>
                <tr>
                    <td>PRODUCT STOCK DATE</td>
                    <td><input type='text' name='stockDate' class='form-control' value="<?php date_default_timezone_set('Africa/Nairobi'); echo date("d-m-Y")?>" onclick="myFunction();" required placeholder='Product Price' required></td>
                </tr>
                <script>
                  function myFunction() {
                    document.getElementById('date').value = Date();
                  }
                </script>
                <tr>
                    <td colspan="2">
                        <button type="submit" class="btn btn-primary" name="btn-save" id="btn-save">
                            <span class="glyphicon glyphicon-plus"></span> Save this Record
                        </button>  
                    </td>
                </tr>

            </table>
        </form>
    </div>
</div>

