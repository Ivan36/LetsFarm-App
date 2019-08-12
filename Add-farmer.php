<style type="text/css">
    #dis{
        display:none;
    }
</style>


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


<body>
    <div class="b-container">
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10" style="padding-bottom:10px;">
                <div class='panel panel-success'>
                    <div class='panel-body'>
                        <div class="row">
                            <h2 style="color:#6495ED; text-align: center; font-family: Georgia, Times New Roman, serif;">REGISTER NEW FARMER</h2>
                            <hr>
                        </div>
                        <div class="row" style="margin-left: 2%; margin-right: 2%;" >
                            <form action="process.php" method="POST">
                                <div class="row">
                                  <div class="col-sm-6">
                                    <label>FIRSTNAME</label>
                                    <input type="text" class="form-control" name="fname" placeholder="Enter FirstName" required="required">
                                </div>

                                <div class="col-sm-6">
                                    <label>LASTNAME</label>
                                    <input type="text" name="lname" class="form-control" placeholder="Enter LastName" required="required">
                                </div>
                            </div>
                            <div class="row">
                              <div class="col-sm-6">
                                <label>ADDRESS</label>
                                <input type="text" name="address" class="form-control" placeholder="Enter Address" required="required">
                            </div>
                            <div class="col-sm-6">
                                <label>PHONE NUMBER</label>
                                <input type="text" name="phno" class="form-control" placeholder="Enter Phone Number" required="required">
                            </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-6">
                              <label>EMAIL</label>
                              <input type="email" name="email" class="form-control" placeholder="Enter Email" required="required">
                          </div>
                          <div class="col-sm-6">
          <!-- <label>EMAIL</label>
              <input type="email" name="email" class="form-control" placeholder="Enter Email" required="required"> -->

          </div>
      </div>
  </br>
  <button class="btn btn-primary" name="farmersave">Register</button>
</form>
</div>
</div>
</div>            
</div>
</div>

</div>
</body>
