<?php
$connect = mysqli_connect('localhost', 'root', '', 'rusher_dairy_db');

if (mysqli_connect_errno())
{
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}