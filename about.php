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

p {
    font-family: Courier New;
    background-color: #555;
    color:white;
    padding:60px;
    border:1px;
    border-radius:50px;
    width:70%;
    margin: auto;
    font-size:18px;
}

h2 {
	background-color: white;
	color: #4CAF50;
	font-family: Georgia;
	font-size:30px;
}

</style>
<link rel="shortcut icon" href="icon.ico" />
<body>

<img src="medidrop.jpg" alt="Medidrop" style="width:220px;height:100px; padding:20px;">

<nav>
    <ul>
	<li><a href="home.php">Home</a></li>
	<li><a class="active" href="about.php">About Us</a></li>
	<li><a href="contact.php">Contact Us</a></li>
    </ul>
</nav>

<nav1>
	<ul>
	<li><a href="donorregistration.php">Registration</a></li>
	<li><a href="donorlogin.php">Login</a></li>
	<li><a href="blooddonationfacts.php">Blood Donation Facts</a></li>
	<li><a href="whocancan't.php">Who Can/Can't Donate</a></li>
    <li><a href="request.php">Blood Requests</a></li>
	</ul>
</nav1>

<div style="margin-left:25%;">

<h2>About Us:</h2>

<p>Have you at anytime witnessed a relative of yours or a close friend searching frantically for a blood donor,
when blood banks say out of stock, the donors in mind are out of reach and the time keeps ticking?
Have you witnessed loss of life for the only reason that a donor was not available at the most needed hour?
Is it something that we as a society can do nothing to prevent?<br>
<br>This thought laid our step ahead in creating
a website called "MEDIDROP".<br>
<br>
The idea of our website is to bring voluntary blood donors and those in need of blood on to a common platform.
Through this website, we seek donors who are willing to donate blood and as well as provide support to those
who are in need of it.</p>

</body>
</html>