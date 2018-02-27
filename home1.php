



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

h2 {
	background-color: white;
	color: #4CAF50;
	font-family: Georgia;
	font-size:40px;
   padding: 0px 0px 0px 190px;
}

p {
    font-family: Courier New;
    background:#555;
    border:1px;
    border-radius:50px;
    color:white;
    padding:100px 100px 100px 50px;
    width:80%;
    margin: auto;
    font-size:25px;
}

</style>
<link rel="shortcut icon" href="icon.ico" />
<body>


<img src="medidrop.jpg" alt="Medidrop" style="width:220px;height:100px; padding:20px;">

<nav>
    <ul>
	<li><a class="active" href="home.php">Home</a></li>
	<li><a href="about1.php">About Us</a></li>
	<li><a href="contact1.php">Contact Us</a></li>
	<li><a href="feedback.php">Feedback</a></li>
    </ul>
</nav>

<nav1>
	<ul>
	<li><a href="finddonor.php">Find Donor</a></li>
	<li><a href="postbloodrequest.php">Post Blood Request</a></li>
	<li><a href="blooddonationfacts1.php">Blood Donation Facts</a></li>
	<li><a href="whocancan't1.php">Who Can/Can't Donate</a></li>
    <li><a href="request1.php">Blood Requests</a></li>
    <li><a href="logout.php">Logout</a></li>
	</ul>
</nav1>

<div style="margin-left:25%;">

<h2> Welcome to MediDrop!</h2>
<hr>
<p>Our mission is to fulfill every blood request in the country with a promising web portal and motivated individuals who are willing to donate blood.</p>
<hr>
</body>
</html>