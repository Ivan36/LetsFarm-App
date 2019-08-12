
<?php include "menu.php" ?>
<?php include "adminsidenavbar.php"?>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<!-- Bootstrap core CSS-->
<link href="css/bootstrap.css" rel="stylesheet">
<!-- Custom fonts for this template-->
<link href="../fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
<link href="css/client.css" rel="stylesheet" type="text/css">
<!-- Page level plugin CSS-->

<link type="text/css" href="vendor/datatable/css/jquery.dataTables.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="vendor/datatable/css/buttons.dataTables.min.css">
<script type="text/javascript" src="vendor/datatable/js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="vendor/datatable/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="vendor/datatable/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="vendor/datatable/js/buttons.print.min.js"></script>
<script type="text/javascript" src="vendor/datatable/js/buttons.colVis.min.js"></script>
<script type="text/javascript" src="vendor/datatable/js/buttons.flash.min.js"></script>
<script type="text/javascript" src="vendor/datatable/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="vendor/datatable/js/jszip.min.js"></script>
<script type="text/javascript" src="vendor/datatable/js/pdfmake.min.js"></script>
<script type="text/javascript" src="vendor/datatable/js/vfs_fonts.js"></script>
    <title>Vendors page</title>
    <style>
      .m_buttons{
        float:right;
        margin-left:20px;
        padding:10px 20px;
      }
    </style>

    <script type="text/javascript">
      $(document).ready(function () {

        $("#btn-view").hide();

        $("#btn-add").click(function () {
          $(".content-loader").fadeOut('slow', function ()
          {
            $(".content-loader").fadeIn('slow');
            $(".content-loader").load('Add-vendor.php');
            $("#btn-add").hide();
            $("#btn-view").show();
          });
        });

        $("#btn-view").click(function () {

          $("body").fadeOut('slow', function ()
          {
            $("body").load('vendors.php');
            $("body").fadeIn('slow');
            window.location.href = "vendors.php";
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

   <div class="row">
    <div class="b-container">
      <h2 class="form-signin-heading" style = "color:green;text-align: center;">REGISERED VENDORS</h2><hr />
      <button class="btn btn-primary" type="button" id="btn-add" onclick="href="Add-vendor.php""><i class="fas fa-fw fa-plus-circle"></i> &nbsp; ADD NEW VENDORS</button>
      <button class="btn btn-info" type="button" id="btn-view"> <i class="fas fa-fw fa-eye"></i> &nbsp; VIEW VENDORS</button>
      <hr />

      <div class="content-loader">
        <table cellspacing="0" width="100%" id="example" class="display nowrap table table-striped table-bordered table-hover table-responsive">
          <thead>
            <tr>
              <td>ID</td>
              <td>Full Names</td>
              <td>Contact</td>
              <td>Home Area</td>
              <td>Action</td>
            </tr>
          </thead>
          <tbody>
            <?php
            require_once '../function/pdoconfig.php';

            $stmt = $DB_con->prepare("SELECT * FROM vendors ORDER BY vid");
            $stmt->execute();
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
              ?>
              <tr>
                <td><?php echo $row['vid']; ?></td>
                <td><?php echo $row['vNames']; ?></td>
                <td><?php echo $row['contact']; ?></td>
                <td><?php echo $row['location']; ?></td>
                <td align="center">
                  <a class="btn btn-sm btn-default" style="color: green;" href="#vendor-edit.php?edit_id=<?php echo $row['vid']; ?>" title="click to update vendor" onclick="return confirm('sure to update vendor = <?php echo $row['vid']; ?> ?')">
                    <i class="fas fa-fw fa-edit"></i>
                  </a>
                  &nbsp;
                  <a class="btn btn-sm btn-default" style="color: red;" name="inactive" href="#farmerdelete.php?delete_id=<?php echo $row['vid']; ?>" title="click to delete vendor" onclick="return confirm('sure to delete vendor = <?php echo $row['vid']; ?> ?')">
                    <i class="fas fa-fw fa-trash"></i>
                   </a>
                </td>
              </tr>
              <?php
            }
            ?>
          </tbody>
          <tfoot>
            <tr>
              <td>ID</td>
              <td>Full Names</td>
              <td>Contact</td>
              <td>Home Area</td>
              <td>Action</td>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
    <script type="text/javascript" charset="utf-8">
// $(document).ready(function() {
  // $('#example').DataTable( {
  //   dom: 'Bfrtip',
  //   buttons: [
  //   'copy', 'csv', 'excel', 'pdf', 'print'
  //   ]
  // } );



  $(document).ready(function() {
    document.title='Rushere dairy cooperative limited vendors';
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'copyHtml5',
                exportOptions: {
                    columns: [ 0, ':visible' ]
                }
            },
            {
                extend: 'excelHtml5',
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                extend: 'pdfHtml5',
                exportOptions: {
                    columns: [ 0, ':visible' ]
                }
            },
            'csv','excel', 'print','colvis'
        ]
    } );
} );          
</script>            
</div>
</div>
</div>
</div>
