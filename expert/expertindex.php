<?php include "expertmenu.php" ?>

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

<script type="text/javascript" src="vendor/datatable/js/buttons.flash.min.js"></script>
<script type="text/javascript" src="vendor/datatable/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="vendor/datatable/js/jszip.min.js"></script>
<script type="text/javascript" src="vendor/datatable/js/pdfmake.min.js"></script>
<script type="text/javascript" src="vendor/datatable/js/vfs_fonts.js"></script>
    <title>System users</title>
    <style>
      .m_buttons{
        float:right;
        margin-left:20px;
        padding:10px 20px;
      }
    </style>

  </head>
  <div class="content" >
   <br>
   <!-- <a href="dashboard.php"><button type="button" class="btn btn-success">Notifications</button></a> -->
   <div class="row">
<div id="content-wrapper">

            <div class="container-fluid">

              <!-- Breadcrumbs-->
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Manager</li>

              </ol>

             <div class="row">
                <div class="row">
                  <!-- <div class="col-sm-1"></div> -->
                    <div class="col-sm-3" style="margin-left: 15px;">
                        <div class="list-group">
                            <a href="Admindashbod.php" class="list-group-item ">Users</a>
                            <a href="#" class="list-group-item">Inquires</a>
                            <a href="#" class="list-group-item">Generate Reports</a>
                            <a href ="logout.php" class="list-group-item" name = "logout">Logout</a>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="jumbotron" style="border-radius:1em;padding:30px 20px; margin-right:;">
                            <h1>Hello, <?php echo $ro['username']; ?>
                            <p style="font-family: Georgia, Times New Roman, serif; font-size: 24px;color: green;">Welcome to LetsFarm system ,fill free to interact and execute your tasks here.</p>
                        </div>
                    </div>
                </div>
            </div>

              <!-- Sticky Footer -->
              

            </div>
            <!-- /.content-wrapper -->

          </div>
          <!-- /#wrapper -->
        </div>
      </div>