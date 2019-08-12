<?php
$server="localhost";
$user="root";
$password="";
$database="lets_farm_db";
$conn=mysqli_connect($server,$user,$password,$database);
try{
	if ($conn) {			
		echo "connection success";
	}else{
		echo "not success is connection";
	}
}catch(Exception $e){
	echo $e->getmessage();
}

?>
