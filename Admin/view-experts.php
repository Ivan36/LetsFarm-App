
<?php include "menu.php" ?>


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link href="css/client.css" rel="Stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
  <link href="css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
  <link href="css/datatables.min.css" rel="stylesheet" type="text/css">
  <!-- Custom fonts for this template-->
  <link href="../fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="css/client.css" rel="stylesheet" type="text/css">

  <script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
  <title>System users</title>
  <style>
  .m_buttons{
    float:right;
    margin-left:20px;
    padding:10px 20px;
  }
</style>

</head>

<script type="text/javascript">
  $(document).ready(function () {

    $("#btn-view").hide();

    $("#btn-add").click(function () {
      $(".content-loader").fadeOut('slow', function ()
      {
        $(".content-loader").fadeIn('slow');
        $(".content-loader").load('add_form.php');
        $("#btn-add").hide();
        $("#btn-view").show();
      });
    });

    $("#btn-view").click(function () {

      $("body").fadeOut('slow', function ()
      {
        $("body").load('view-farmer.php');
        $("body").fadeIn('slow');
        window.location.href = "view-farmer.php";
      });
    });

  });
</script>

</head>
<div class="content" >
 <br>
 <!-- <a href="dashboard.php"><button type="button" class="btn btn-success">Notifications</button></a> -->
 <div class="row">

   <div class="b-container">
 <!--  <div class="jumbotron bg-success">
    <p style="color: #00cc99;"><strong> Realise the fastest communication With Westtalk </strong></p>
     <p style="margin-left: 5%;font-family: Georgia, Times New Roman, serif;"> <strong>SEND SMS REQUEST TO ANY ONLINE SURVEYOR FOR YOUR LAND DETAILS</strong> </p>
   </div> -->

   <div class="row" style="margin-left: 2%; margin-top: 5%;">
    <div class="b-container">
      <hr>
      <h2 class="form-signin-heading" style = "color:green;text-align: center;">CURRENT EXPERTS USING THE SYSTEM</h2><hr />
      <button class="btn btn-info" type="button" id="btn-add" onclick="href="register.php""><i class="fas fa-fw fa-plus-circle"></i> &nbsp; ADD EXPERTS</button>
      <button class="btn btn-info" type="button" id="btn-view"> <i class="fas fa-fw fa-eye"></i> &nbsp; VIEW USERS</button>
      <hr />

      <div class="content-loader">
        <table cellspacing="0" width="100%" id="example" class="display nowrap table table-striped table-bordered table-hover table-responsive">
          <thead>
            <tr>
              <td>ID</td>
              <td>Name</td>
              <td>Specification</td>
              <td>Address</td>
              <td>Contact</td>
              <td>FAX</td>
              <td>Email</td>
              <td>Action</td>
            </tr>
          </thead>
          <tbody>
            <?php
            require_once 'dbconfig.php';

            $stmt = $DB_con->prepare("SELECT * FROM experts ORDER BY eid");
            $stmt->execute();
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
              ?>
              <tr>
                <td><?php echo $row['eid']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['specifications']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td><?php echo $row['phonenumber']; ?></td>
                <td><?php echo $row['faxnumber']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td align="center">
                  <a class="btn btn-sm btn-default" style="color: green;" href="activate.php?edit_id=<?php echo $row['eid']; ?>" title="click to activate" onclick="return confirm('sure to activate account = <?php echo $row['eid']; ?> ?')">
                    <i class="fas fa-fw fa-edit"></i>
                  Activate</a>
                  &nbsp;
                  <a class="btn btn-sm btn-default" style="color: red;" name="inactive" href="deleteuser.php?delete_id=<?php echo $row['eid']; ?>" title="click for Deactivate" onclick="return confirm('sure to Deactivate account = <?php echo $row['eid']; ?> ?')">
                    <i class="fas fa-fw fa-trash"></i>
                  Deactivate </a>
                </td>
              </tr>
              <?php
            }
            ?>
          </tbody>
          <tfoot>
            <tr>
              <td>ID</td>
              <td>First Name</td>
              <td>Last Name</td>
              <td>Address</td>
              <td>Contact</td>
              <td>Email</td>
              <td>Action</td>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/datatables.min.js"></script>
    <script type="text/javascript" src="js/crud.js"></script>

    <script type="text/javascript" charset="utf-8">
      $(document).ready(function () {
        $('#example').DataTable();
        $('#example')
        .removeClass('display')
        .addClass('table table-bordered');
      });
    </script>          
  </div>
</div>
</div>
</div>
