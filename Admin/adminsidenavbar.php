    
<!doctype html>
<html lang="en"><head>
    <meta charset="utf-8">
    <title>Rushere Farmers cooperative society ltd</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.css"> -->
    <link rel="stylesheet" href="lib/font-awesome/css/font-awesome.css">
    <script src="js/argiepolicarpio.js" type="text/javascript"></script>
    <script src="js/application.js" type="text/javascript"></script> 
    <script src="lib/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="lib/jquery.sortelements.js" type="text/javascript"></script>
    <script src="lib/jquery.bdt.js" type="text/javascript"></script>
    <script src="lib/calendar.js" type="text/javascript"></script>
    <script src="lib/dataTables.bootstrap.min.js" type="text/javascript"></script>
    <!-- <script src="lib/jquery.dataTables.min.js" type="text/javascript"></script> -->
    <link rel="stylesheet" type="text/css" href="stylesheet/jquery.bdt.css">
    <link rel="stylesheet" type="text/css" href="stylesheets/theme.css">
    <link rel="stylesheet" type="text/css" href="stylesheets/custom.css">
    <link rel="stylesheet" type="text/css" href="stylesheets/msc-style.css">
    <link rel="stylesheet" type="text/css" href="stylesheets/premium.css">
    <link rel="stylesheet" type="text/css" href="stylesheets/calenda.css">
            <!--for calendar-->
    <link href='lib/fullcalendar/fullcalendar/fullcalendar.css' rel='stylesheet' />
    <link href='lib/fullcalendar/fullcalendar/fullcalendar.print.css' rel='stylesheet' media='print' />
    <script src='lib/fullcalendar/lib/jquery.min.js'></script>
    <script src='lib/fullcalendar/lib/jquery-ui.custom.min.js'></script>
    <script src='lib/fullcalendar/fullcalendar/fullcalendar.min.js'></script>
    <link rel="stylesheet" href="css/style.css">
    <!--stops here-->    
</head>
    <div style="overflow-y:scroll;height: 700px margin-top:15%;" class="sidebar-nav" >
    <div class="userId"><span style="text-transform:uppercase; text-align: center;color: green; font-size: 18px;">Admin Dashboard</span>
    </div>
   
        <!-- Sidebar  -->
        <nav id="sidebar">

            <ul class="list-unstyled components">
                <p style="background-color: yellow;margin-right: 2%;">
                    <?php
                    include'live-clock.php';
                    ?>
                </p>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-fw fa-home"></i> Home</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="index.php"><i class="fas fa-fw fa-home"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="Admindashbod.php"><i class="fas fa-fw fa-user-circle"></i> System Users</a>
                        </li>
                        
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fas fa-fw fa-shopping-cart"></i> Our Shop</a>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-fw fa-list"></i> More Pages</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="farmer.php"><i class="fas fa-fw fa-plus"></i> Add Farmers</a>
                        </li>
                        <li>
                            <a href="vendors.php"><i class="fas fa-fw fa-plus"></i> Add Vendors</a>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-fw fa-folder"></i> Generate reports</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="milkprocessing.php"><i class="fas fa-fw fa-recycle"></i> Milk process</a>
                </li>
                <li>
                    <a href="#"><i class="fas fa-fw fa-folder"></i> Advances</a>
                </li>
                <li>
                    <a href="#"><i class="fas fa-fw fa-phone"></i> Contact</a>
                </li>
                <li><a href="logout.php" style="color: red;"><i class="fas fa-fw fa-power-off"></i> Logout</a></li>
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
    </div>
    </html>