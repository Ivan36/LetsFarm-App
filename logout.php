<?php 
include('function/config.php');
session_start();
$id  =  $_SESSION['id'];

session_destroy();
echo "<html><br><br><br><div id='loading' style='color:green;text-align: center;font-weight: 200;font-family: Georgia, Times New Roman, serif;font-size:20px;'><b> Logout successful..<center><p><img src='loading-img/load.gif' style='margin-top:8%;'></p></center></div></html>";
        header( "refresh:6;url=index.php" );
?>