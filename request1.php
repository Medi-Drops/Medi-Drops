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
	<li><a href="home.php">Home</a></li>
	<li><a href="about.php">About Us</a></li>
	<li><a href="contact.php">Contact Us</a></li>
    <li><a href="feedback.php">Feedback</a></li>
    </ul>
</nav>

<nav1>
	<ul>
     <li><a href="finddonor.php">Find Donor</a></li>
    <li><a href="postbloodrequest.php">Post Blood Request</a></li>
    <li><a href="blooddonationfacts1.php">Blood Donation Facts</a></li>
    <li><a href="whocancan't1.php">Who Can/Can't Donate</a></li>
    <li><a class="active" href="request1.php">Blood Requests</a></li>
    <li><a href="home.php">Logout</a></li>
	</ul>
</nav1>

<div style="margin-left:25%;">

<h1>Requests</h1>
<?php
    require_once("dbh.php");
    $query = "SELECT * FROM `post blood request`";
    $runQuery = mysqli_query($conn,$query);
    while ($row = mysqli_fetch_array($runQuery, MYSQLI_NUM)) {
?> 

<fieldset>
<div id="example2">

<p>Patient Full Name : <?php echo $row[0];?></p>

<p>Patient Blood Group : <?php echo $row[1];?></p>

<p>Patient Age : <?php echo $row[2];?></p>

<p>When you need blood? :  <?php echo $row[3];?></p>

<p>How many units you need ? :  <?php echo $row[4];?></p>

<p>Contact Number : +91 <?php echo $row[5];?></p>

<p>Hospital Name :  <?php echo $row[6];?></p>

<p>State : <?php echo $row[7];?>
</p>


<p>District : <?php echo $row[8];?> </p>

<p>Patient Address: <?php echo $row[9];?>
</p>

<p>Purpose: <?php echo $row[10];?>
</p>

</div>
</fieldset>
<?php } ?>

</body>
</html>