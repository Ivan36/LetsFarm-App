<?php
session_start();

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_DATABASE','lets_farm_db');
//database connection
$con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_DATABASE);

if (mysqli_connect_errno()) {
	echo "Connection to the database failed: ";
	echo mysqli_connect_error();
	exit();
}

?>
