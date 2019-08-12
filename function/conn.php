
<?php
include "config.php";

$username = $_POST['fullname'];
$gd = $_POST['gender'];
$Hd = $_POST['Hdistrict'];
$email = $_POST['email'];
$phone = $_POST['phoneNO'];
$password = $_POST['password'];
$usertype = $_POST['usertype'];


$sql = $conn->query(" INSERT INTO user (fullname,gender,Hdistrict,email,phoneNO,password,usertype) values ('$username','$gd','$Hd','$email','$phone','$password','$usertype')");
	?>
<script type="text/javascript">
    window.alert("Registration successfully Wait for Confirmation");
    window.location.href = "../index.php";
</script>
<?php
// header('location:../index.php');
?>