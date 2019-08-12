<?php 
include('../function/config.php');
session_start();
if (isset($_SESSION['id'])) {
    //allow user to access the system
}else{
  header('location:../index.php');
}
$id  = $_SESSION['id'];
$ask = "SELECT * FROM users WHERE id = '$id'";
$res = mysqli_query($conn,$ask);
$ro = mysqli_fetch_array($res);
?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link href="css/responsive.css" rel="Stylesheet">
<link href="css/client.css" rel="Stylesheet">
<!-- Custom fonts for this template-->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-2.1.1.min.js"></script>
<script src="js/jquery.validate.js"></script>
<script src="js/form-validation.js"></script>

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
<div class="head2">
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" href="#" style="color: green;">Menu</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="#active"><a href="expertindex.php"> <i class="fa fa-fw fa-home"></i> Home</a></li>
          <li><a href="view-products.php"><i class="fa fa-fw fa-shopping-cart"></i>Our Products</a></li>
          <li><a href="view-farmers.php"><i class="fa fa-fw fa-user"></i>Farmers</a></li>
          <li><a href="#shoping/index.php"><i class="fa fa-fw fa-folder-open"></i>Advances</a></li>
          <li class = "dropdown">
            <!--     <a href = "#" class = "dropdown-toggle" data-toggle = "dropdown"><i class="fas fa-fw fa-list"></i> More Pages<b class = "caret"></b></a> -->

            <!-- <ul class = "dropdown-menu">
              <li><a href = "farmers.php">Add New Farmer</a></li>
              <li><a href = "customers.php">Add New Customer</a></li>
              <li><a href = "saccos.php">Add New SACCOs</a></li>
               <li><a href = "experts.php">Add New Experts</a></li>
              <li><a href = "#spare.php">Generate reports</a></li>
              <li><a href = "#Admindashbod.php">User Accounts</a></li>
            </ul> -->
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
         <li style="margin-top: 5%;">
           <span class="fa fa-user"></span> Welcome: <?php echo $ro['usertype'] ." , ". $ro['username'] ?>
         </li>
         <li><a href="../logout.php" onclick="return confirm('Are you sure you want to leave??')"  style="color: white;"><i class="fas fa-fw fa-power-off"></i> Logout</a></li>
       </ul>     </div>
     </div>
   </nav>
 </div>
