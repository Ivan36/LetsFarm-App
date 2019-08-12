<?php
include"../dbconnection.php";

// -----------------------------register farmer---------------------------

if (isset($_POST['farmersave'])) {

     $fname  =  $_POST['fname'];
     $lname  =  $_POST['lname'];
     $address  =  $_POST['address'];
     $phno  =  $_POST['phno'];
     $email  =  $_POST['email'];


     $sql =$conn-> query("INSERT INTO farmers(first_name,last_name,Address,phone_number,email) values('$fname','$lname','$address','$phno','$email')");

     ?>
<script type="text/javascript">
	window.alert("farmer registered successfully");
	window.location.href="index.php";


</script>


     <?php 
}


// ------------------------------register customer-------------------------------------

if (isset($_POST['custsave'])) {

     $fname  =  $_POST['fname'];
     $lname  =  $_POST['lname'];
     $address  =  $_POST['address'];
     $phno  =  $_POST['phone'];
     $email  =  $_POST['email'];


     $sql =$conn-> query("INSERT INTO customers(firstname,lastname,Address,phonenumber,email) values('$fname','$lname','$address','$phno','$email')");

     ?>
<script type="text/javascript">
	window.alert("customer registered successfully");
	window.location.href="index.php";


</script>


     <?php 
}


//------------------ register experts-----------------------------
if (isset($_POST['expsave'])) {

     $name  =  $_POST['name'];
     $specification  =  $_POST['specification'];
     $address  =  $_POST['address'];
     $phno  =  $_POST['phone'];
      $fax  =  $_POST['fax'];
     $email  =  $_POST['email'];


     $sql =$conn-> query("INSERT INTO experts(name,specifications,address,phonenumber,faxnumber,email) values('$name','$specification','$address','$phno','$fax','$email')");

     ?>
<script type="text/javascript">
	window.alert("expert registered successfully");
	window.location.href="index.php";


</script>


     <?php 
}


//---------------------saccos register-----------------------

//------------------ register experts-----------------------------
if (isset($_POST['saccosave'])) {

     $name  =  $_POST['fname'];
     $branch  =  $_POST['branch'];
     $address  =  $_POST['address'];
     $phno  =  $_POST['phone'];
      $fax  =  $_POST['fax'];
     $email  =  $_POST['email'];


     $sql =$conn-> query("INSERT INTO sacco(sacconame,branch,address,phonenumber,faxnumber,email) values('$name','$branch','$address','$phno','$fax','$email')");

     ?>
<script type="text/javascript">
	window.alert("expert registered successfully");
	window.location.href="index.php";


</script>


     <?php 
}



  ?>