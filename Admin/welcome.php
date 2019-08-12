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
                            <h1>Hello, <?php echo  $ro['username'] ?>
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