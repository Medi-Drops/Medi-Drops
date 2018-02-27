<?php
require_once("dbh.php");
if(count($_POST)>0) {
    $sql = "SELECT * FROM `registration form` WHERE WHERE ID='" . $_GET["name"] . "'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
    echo $row['FullName'];
    echo $row['BloodGroup'];
    echo $row['Gender'];
    echo $row['DateofBirth'];
    echo $row['ContactNumber'];
    echo $row['slct1'];
    echo $row['slct2'];
    echo $row['EmailId'];
    echo $row['text'];
}
else("exit")
?>
   



<!DOCTYPE html>
<html lang="en">
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

input[type=text], select {
    width: 100%;
    padding: 10px 15px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

textarea[name=text], select {
    width: 100%;
    padding: 10px 15px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 10%;
    background-color: #4CAF50;
    color: white;
    padding: 10px 15px;
    margin: 4px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

p {
    background-color: white;
    color:black;
    padding:1px;
    border-radius:20px;
}

h1 {
	background-color: white;
	color: #4CAF50;
	font-family: Georgia;
	font-size:30px;
}

#example2 p {
    font-family: Courier New;
    background-color: #555;
    color:white;
    padding:20px;
    border-radius:20px;
}

</style>
<link rel="shortcut icon" href="icon.ico" />
<body>

<img src="medidrop.jpg" alt="Medidrop" style="width:220px;height:100px; padding:20px;">

<nav>
    <ul>
	<li><a href="home1.php">Home</a></li>
	<li><a href="about1.php">About Us</a></li>
	<li><a href="contact1.php">Contact Us</a></li>
	<li><a href="feedback.php">Feedback</a></li>
    </ul>
</nav>

<nav1>
	<ul>
	<li><a href="finddonor.php">Find Donor</a></li>
	<li><a href="postbloodrequest.php">Post Blood Request</a></li>
	<li><a href="blooddonationfacts.php">Blood Donation Facts</a></li>
	<li><a href="whocancan't.php">Who Can/Can't Donate</a></li>
    <li><a class="active" href="profile.php">Profile</a></li>
    <li><a href="request1.php">Blood Requests</a></li>
    <li><a href="home.php">Logout</a></li>
	</ul>
</nav1>

<div style="margin-left:25%;">

<h1>Profile:</h1>


<fieldset>
<form action="" method="POST">    
<div id="example2">

<p>Full Name :</p>

<p>Blood Group :
</p>

<p>Gender :
</p>

<p>Date Of Birth :</p>

<p>Contact Number : +91</p>

<p>State :
</p>

<p>District :
</p>

<p>City :
</p>

<p>Email Id :</p>

<p>Address:
</p>
</div>
</form>
</fieldset>
</body>
</html>