<?php
include'dbh.php';
if(count($_POST)>0) {
	$sql = "SELECT * FROM `registration form` WHERE UserId='" . $_POST["UserId"] . "' AND Password='" . $_POST["Password"] . "'";
	$result = mysqli_query($conn,$sql);
	$rowcount = mysqli_num_rows($result);
	if($rowcount) ///if($rowcount == 1)
	{
		echo "You are logged in";
		header("Location:home1.php");
	}
	else
	{ ?>
		
    <script>
      alert("invalid credentials");
      </script>
      <?php
	}
	
}
?>



<!DOCTYPE html>
<php lang="en">
<head>
  <meta charset="utf-8">
  <title>MediDrop</title>
</head>
<style>
nav {
	width:40%;
	float:right;
	font-size:18px;
	padding:20px;
}
nav ul {
	list-style-type:none;
}
nav li a {
	float:left;
	color: #000; /*change the color*/
	margin-right:10px;
	padding: 8px 16px;
	text-decoration: none;
}
nav li a:hover:not(.active) {
    background-color: #555;
    color:white;
}
nav li a.active {
    background-color: #4CAF50;
    color: white;
}
nav1 {
	font-size:18px;
}

nav1 ul {
	list-style-type:none;
    width: 200px;
    position: fixed;
	height: 100%;
    overflow: auto;
}

nav1 li a {
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
    margin:10px;
}

nav1 li a:hover:not(.active) {
    background-color: #555;
    color:white;
}
nav1 li a.active {
    background-color: #4CAF50;
    color: white;
}

h1 {
	background-color: white;
	color: #4CAF50;
	font-family: Georgia;
	font-size:30px;
}

p {
    background-color: white;
    color:black;
    padding:1px;
    border-radius:20px;
}

input[type=text], select {
    width: 100%;
    padding: 10px 15px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=password], select {
    width: 100%;
    padding: 10px 15px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

button[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 10px 15px;
    margin: 4px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
    color:white;
}

span.psw {
    float: right;
    padding-top: 16px;
}

</style>
<link rel="shortcut icon" href="icon.ico" />
<body>

<img src="medidrop.jpg" alt="Medidrop" style="width:220px;height:100px; padding:20px;">

<nav>
    <ul>
	<li><a href="home.php">Home</a></li>
	<li><a href="about.php">About Us</a></li>
	<li><a href="contact.php">Contact Us</a></li>
    </ul>
</nav>

<nav1>
	<ul>
	<li><a href="donorregistration.php">Registration</a></li>
	<li><a class="active" href="donorlogin.php">Login</a></li>
	<li><a href="blooddonationfacts.php">Blood Donation Facts</a></li>
	<li><a href="whocancan't.php">Who Can/Can't Donate</a></li>
	<li><a href="request.php">Blood Requests</a></li>

	</ul>
</nav1>

<div style="margin-left:25%;">

<h1>Login Form:</h1>

<fieldset>
<form action="" method="POST">
<p>User Id : <input type="text" id="UserId" name="UserId" ></p>
<p>Password : <input type="password" id="Password" name="Password" ></p>

<button type="submit">Login</button>
<input type="checkbox" checked="checked"> Remember me<br>

<button type="button" class="cancelbtn">Cancel</button>

<span class="psw"><a href="#">Forgot Password?</a></span>
</form>
</fieldset>

</body>
</php>