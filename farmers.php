   
<!DOCTYPE html>
<html>
<head>
	<link href="toolbar.html"
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta http-equiv="X-UA-compatible" content="ie=edge"/>
	<link rel="stylesheet" href="http://use.fontawesome.com/releases/v5.8.1/css/all.css"
	integrity="sha384-50oBUHEmvpQ+1LW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
	crossorigin="anonymous" />

	<link rel="stylesheet" href="style.css"/>
	<title>sign up page</title>
</head>

<body>

	<div class="container" id="container">
		<div class="form-container sign-up-container">

			<form action="regprocess.php" method="POST">
				<h1>FARMERS FORM</h1>
				<span> Regestration</span>
				<label>FIRSTNAME</label>
				<input type="text" name="fname" placeholder="Enter FirstName" required="required">
				<label></label>
				<label>LASTNAME</label>
				<input type="text" name="lname" placeholder="Enter LastName" required="required">
				<label>ADDRESS</label>
				<input type="text" name="address" placeholder="Enter Address" required="required">

				<label>PHONE NUMBER</label>
				<input type="text" name="phno" placeholder="Enter Phone Number" required="required">
				<label>EMAIL</label>
				<input type="email" name="email" placeholder="Enter Email" required="required">
				<label>PASSWORD</label>
				<input type="password" name="password" placeholder=" Enter Password" required="required">
				<button name="submit">Register</button>
			</form>
		</div>
		
	</body>
	</html>
