<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="homestyle.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" type="text/css" href="Admin/css/bootstrap.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body bg="th.jpg">
  <div class="row">
<div class="col-sm-3"><h2 style="color: red;margin-left: 5%; font-family: Georgia, Times New Roman, serif;">LETsFARM</h2></div>

<div class="col-sm-6" style="margin-top:5%;">

  <!-- <h2 style="color: white;">Login Form</h2> -->
  <!-- <h2 style="color: #6f6b6bf0;;margin-left: 5%; font-family: Georgia, Times New Roman, serif;">LETsFARM</h2> -->
<form action="signin.php" method="POST">
  <div class="imgcontainer">
    <img src="imgs/background1.jpg" style="height: 60px; width: 60px;" alt="Avatar" class="avatar">
  </div>

  <div class="" style="margin-right: 2%;margin-left: 2%;">
    <label for="uname"><b>Enter Email</b></label>
    <input type="email" placeholder="Enter Email" class="form-control" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" class="form-control" name="password" required>
     <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>   
    <button type="submit" class="btn btn-success">Login</button><hr>
    <a href="signup.php" style="margin-left: 40%;">Register new user</a>
    <hr>
  </div>

  <div class="" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
</div>
</div>
</body>
</html>
