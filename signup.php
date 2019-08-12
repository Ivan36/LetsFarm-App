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
<body bg="th.jpeg">
  <div class="row">
<div class="col-sm-3"></div>

<div class="col-sm-6">
  <h2>Signup Form </h2>
<form action="regprocess.php" method="POST">
  <div class="imgcontainer">
    <img src="imgs/background1.jpg" style="height: 60px; width: 60px;" alt="Avatar" class="avatar">
  </div>

  <div class="" style="margin-right: 2%;margin-left: 2%;">
    <label>USERNAME</label>
        <input type="text" name="username" class="form-control" placeholder="Enter Name" required="required">
        <label>USERTYPE</label>
        <select class="form-control" name="usertype">  
          <option value="" selected="">Select usertype</option>
          <option value="farmer">farmer</option>
          <option value="customer">customer</option>
          <option value="expert">Expert</option>

        </select>
        <label>EMAIL</label>
        <input type="email" name="email" class="form-control" placeholder="Enter Email" required="required">
        <label>PASSWORD</label>
        <input type="password" name="password" class="form-control" placeholder=" Enter Password" required="required">
        <button name="submit" class="btn btn-success">Sign Up</button><hr>
    <a href="index.php" style="margin-left: 40%;">Login</a>
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
