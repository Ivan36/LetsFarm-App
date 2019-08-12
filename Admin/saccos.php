   
<!DOCTYPE html>
<html>
<?php include "menu.php" ?>

<head>
	<link href="toolbar.html">
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta http-equiv="X-UA-compatible" content="ie=edge"/>
	<link rel="stylesheet" href="http://use.fontawesome.com/releases/v5.8.1/css/all.css"
	integrity="sha384-50oBUHEmvpQ+1LW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
	crossorigin="anonymous" />

	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<title>sacco form page</title>
</head>

<body>

<div class="col-sm-4"></div>
	<div class="container" id="container">
		<div class="col-sm-8" style="margin-top: 5%;">

			<form action="process.php" method="POST">
				<h1>SACCO REGISTRATION FORM</h1>
				<hr>
				<label>SACCO NAME</label>
				<input type="text" class="form-control" name="fname" placeholder="Enter Sacco Name" required="required">
			
				<label>BRANCH</label>
				<input type="text" name="branch" class="form-control" placeholder="Enter Branch" required="required">
				<label>ADDRESS</label>
				<input type="text" name="address" class="form-control" placeholder="Enter Address" required="required">

				<label>PHONE NUMBER</label>
				<input type="text" name="phone" class="form-control" placeholder="Enter Phone Number" required="required">
				<label>FAX NUMBER</label>
				<input type="text" name="fax" class="form-control" placeholder="Enter Fax Number" required="required">
				<label>EMAIL</label>
				<input type="email" name="email" class="form-control" placeholder="Enter Email" required="required">
				</br>
				<button class="btn btn-primary" name="saccosave">Register</button>
			</form>
		</div>
		
	</body>
	</html>
