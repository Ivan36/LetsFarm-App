<?php 
include('../function/config.php');
session_start();
if (isset($_SESSION['id'])) {
    //allow uses to access the system
}else{
  header('location:../index.php');
}
$id  = $_SESSION['id'];
$ask = "SELECT * FROM users WHERE id = '$id'";
$res = mysqli_query($conn,$ask);
$ro = mysqli_fetch_array($res);
?>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" type="text/css" href="stylesheet/jquery.bdt.css">
  <link rel="stylesheet" type="text/css" href="stylesheets/theme.css">
  <link rel="stylesheet" type="text/css" href="stylesheets/custom.css">
  <link rel="stylesheet" type="text/css" href="stylesheets/msc-style.css">
  <link rel="stylesheet" type="text/css" href="stylesheets/premium.css">
  <link rel="stylesheet" type="text/css" href="stylesheets/calenda.css">
 
 <!-- Bootstrap core CSS-->
<!-- <link href="css/bootstrap.css" rel="stylesheet"> -->
<!-- Custom fonts for this template-->
<!-- <link href="../fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
<link href="css/client.css" rel="stylesheet" type="text/css"> -->
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

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link href="css/responsive.css" rel="Stylesheet">
  <link href="css/client.css" rel="Stylesheet">
  <!-- Custom fonts for this template-->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- <script src="js/jquery-2.1.1.min.js"></script> -->
  <script src="js/jquery.validate.js"></script>
  <script src="js/form-validation.js"></script>
  <link rel="stylesheet" href="../fontawesome/css/all.css">
  <!-- <script type="text/javascript" src="js/custom.js"></script> -->
</head>
<style>
  /* Remove the navbar's default margin-bottom and rounded borders */ 
  .navbar {
    margin: 1% 1%;
    margin-bottom: 0;
    border-radius: 15px;
  }

  /* Add a gray background color and some padding to the footer */
  footer {
    background-color: #f2f2f2;
    padding: 25px;
    border-radius: 5px;
  }
</style>
<script type="text/javascript">
  
  $(document).ready(function() {
    setInterval(timestamp, 1000);
});

function timestamp() {
    $.ajax({
        url: 'live-clock.php',
        success: function(data) {
            $('#timestamp').html(data);
        },
    });
}
</script>

<div class="head2">
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" href="#" style="color: blue;">Menu</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="#active"><a href="index.php"> <i class="fa fa-fw fa-home"></i> Home</a></li>
          <li><a href="#products.php"><i class="fa fa-fw fa-shopping-cart"></i>Our Products</a></li>
          <li><a href="view-farmer.php"><i class="fa fa-fw fa-user"></i>Farmers</a></li>
          <li><a href="view-customers.php"><i class="fa fa-fw fa-users"></i>Customers</a></li>
          <li><a href="view-saccos.php"><i class="fa fa-fw fa-recycle"></i>SACCOs</a></li>
          <li><a href="view-experts.php"><i class="fa fa-fw fa-user"></i>Experts</a></li>
          <li class = "dropdown">
            <a href = "#" class = "dropdown-toggle" data-toggle = "dropdown"><i class="fas fa-fw fa-list"></i> More Pages<b class = "caret"></b></a>

            <ul class = "dropdown-menu">
              <li><a href = "farmers.php">Add New Farmer</a></li>
              <!-- <li><a href = "customers.php">Add New Customer</a></li> -->
              <li><a href = "saccos.php">Add New SACCOs</a></li>
              <li><a href = "experts.php">Add New Experts</a></li>
              <li><a href = "#spare.php">Generate reports</a></li>
              <li><a href = "#Admindashbod.php">User Accounts</a></li>
            </ul>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
         <li style="margin-top: 5%; color: blue;">
           <span class="fa fa-user"></span> Welcome: <?php echo $ro['usertype'] ." , ". $ro['username'] ?>
          </li>
           <li><a href="../logout.php" onclick="return confirm('Are you sure you want to leave??')"  style="color: white;"><i class="fas fa-fw fa-power-off"></i> Logout</a></li>
         </ul>
       </div>
   </div>
 </nav>
</div>
    <!-- <div class="userId"><span style="text-transform:uppercase; text-align: center;color: green; font-size: 18px;">Admin Dashboard</span>
    </div> -->

    <!-- Sidebar  -->
    <nav id="sidebar" class="sidebar-nav navbar-fixed-top" style="margin-top: 8%; margin-left: 1%;overflow-y:scroll;height: 500px;">

      <ul class="list-unstyled components">
        <div id="timestamp" style="background-color: black;margin-right: 5%;margin-left: 5%; text-align: center; font-size: 18px;"></div>
        <li class="active">
          <a href="index.php" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-fw fa-home"></i> Home</a>
          <ul class="collapse list-unstyled" id="homeSubmenu">
            <li>
              <a href="index.php"><i class="fas fa-fw fa-home"></i> Dashboard</a>
            </li>
            <li>
              <a href="#Admindashbod.php"><i class="fas fa-fw fa-user-circle"></i> System Users</a>
            </li>

          </ul>
        </li>
        <li>
          <a href="#"><i class="fas fa-fw fa-shopping-cart"></i> Our products</a>
        </li>
        <li>
          <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-fw fa-list"></i> More Pages</a>
          <ul class="collapse list-unstyled" id="pageSubmenu">
            <li>
              <a href="farmers"><i class="fas fa-fw fa-plus"></i> Add Farmers</a>
            </li>
            <li>
              <a href="customers"><i class="fas fa-fw fa-plus"></i> Add Customers</a>
            </li>
            <li>
              <a href="saccos"><i class="fas fa-fw fa-plus"></i> Add Saccos</a>
            </li>
            <li>
              <a href="experts"><i class="fas fa-fw fa-plus"></i> Add Experts</a>
            </li>
            <li>
              <a href="#"><i class="fas fa-fw fa-folder"></i> Generate reports</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="#milkprocessing.php"><i class="fas fa-fw fa-recycle"></i> Saccos</a>
        </li>
        <li>
          <a href="advances.php"><i class="fas fa-fw fa-folder"></i> Advances</a>
        </li>
        <li>
          <a href="#"><i class="fas fa-fw fa-phone"></i> Contact</a>
        </li>
        <li><a href="logout.php" style="color: white;"><i class="fas fa-fw fa-power-off"></i> Logout</a></li>
      </ul>

      <ul class="list-unstyled CTAs">
              <!-- <li>
                    <a href="logout.php" style="color: red;">Logout</a>
                  </li> -->  
                </ul>
              </nav>

              <!-- Page Content  -->

              <script type="text/javascript">
                $(document).ready(function () {
                  $('#sidebarCollapse').on('click', function () {
                    $('#sidebar').toggleClass('active');
                  });
                });
              </script>
            
            
