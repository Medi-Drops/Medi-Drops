<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>MediDrop</title>

</head>
<style>
h3 {
    color: slateblue;
}
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
    padding:20px;
    border-radius:20px;
}

h3 {
	background-color: white;
	color: black;
	font-family: Georgia;
}

h1 {
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
	<li><a href="home1.php">Home</a></li>
	<li><a href="about1.php">About Us</a></li>
	<li><a class="active" href="contact1.php">Contact Us</a></li>
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
	<li><a href="home.php">Logout</a></li>
	</ul>
</nav1>

<div style="margin-left:25%;">

<h1>Contact Us:</h1>

<fieldset>
<h3>Mandala Sai Kushal</h3>
	<p>Email Id : mandala.s.kushal@st.niituniversity.in<br>
	Mobile Number: 8332068563
	</p>

<h3>Ravindranath</h3>
	<p>Email Id : p.ravindranath@st.niituniversity.in<br>
	Mobile Number: 9052403228
	</p>

<h3>Harihanth</h3>
	<p>Email Id : julakanti.harihanth@st.niituniversity.in<br>
	Mobile Number: 8332910360
	</p>

<h3>Rahul Nikki</h3>
	<p>Email Id : yrahul.nikki@st.niituniversity.in<br>
	Mobile Number: 9550868684
	</p>

<h3>Sadhika</h3>
	<p>Email Id : challa.sadhika@st.niituniversity.in<br>
	Mobile Number: 9505178684
	</p>

<h3>Sowmya</h3>
	<p>Email Id : chapala.s.sowmya@st.niituniversity.in<br>
	Mobile Number: 9571963170
	</p>
</fieldset>

</body>
</html>