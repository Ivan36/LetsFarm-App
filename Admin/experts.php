
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
     <form action="process.php" method="POST">
        <h1>EXPERTS REGISTRATION FORM</h1>
        <hr>
        <label>NAME</label>
        <input type="text" class="form-control" name="name" placeholder="Enter Name" required="required">
      
        <label>SPECIFICATION</label>
        <input type="text" name="specification" class="form-control" placeholder="Enter Specification" required="required">
        <label>ADDRESS</label>
        <input type="text" name="address" class="form-control" placeholder="Enter Address" required="required">

        <label>PHONE NUMBER</label>
        <input type="text" name="phone" class="form-control" placeholder="Enter Phone Number" required="required">
        <label>FAX NUMBER</label>
        <input type="text" name="fax" class="form-control" placeholder="Enter Fax Number" required="required">
        <label>EMAIL</label>
        <input type="email" name="email" class="form-control" placeholder="Enter Email" required="required">
        </br>
        <button class="btn btn-primary" name="expsave">Register</button>
      </form>
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
