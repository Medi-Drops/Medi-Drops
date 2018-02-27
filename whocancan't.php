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

#example1 {
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

#example2 {
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
	<li><a href="about.php">About Us</a></li>
	<li><a href="contact.php">Contact Us</a></li>
    </ul>
</nav>

<nav1>
	<ul>
	<li><a href="donorregistration.php">Registration</a></li>
	<li><a href="donorlogin.php">Login</a></li>
	<li><a href="blooddonationfacts.php">Blood Donation Facts</a></li>
	<li><a class="active" href="whocancan't.php">Who Can/Can't Donate</a></li>
	<li><a href="request.php">Blood Requests</a></li>
	</ul>
</nav1>

<div style="margin-left:25%;">

<h2>Can...</h2>

<div id="example1">
<p>

<b>Let others benefit from your good health. Do donate blood if ...</b>
	<li>you are between age group of 18-60 years.</li>
	<li>your weight is 45 kgs or more.</li>
	<li>your haemoglobin is 12.5 gm% minimum.</li>
	<li>your last blood donation was 3 months earlier.</li>
	<li>you are healthy and have not suffered from malaria, typhoid or other transmissible disease in the recent past.</li>
<br>There are many, many people who meet these parameters of health and fitness!<br>
<br><b>Do abide by our rules - be truthful about your health status!</b><br>
<br>We ensure the health of blood, before we take it, as well as after it is collected. Firstly, the donor is expected to be honest about his or her health history and current condition. Secondly, collected blood is tested for venereal diseases, hepatitis B & C and AIDS.<br>
<br><b>You have to be healthy to give 'safe blood'.</b>

</p>
</div>

<h2>Can't...</h2>

<div id="example2">
<p>

<b>Do not donate blood if you have any of these conditions</b>
	<li>cold / fever in the past 1 week.</li>
	<li>under treatment with antibiotics or any other medication.</li>
	<li>cardiac problems, hypertension, epilepsy, diabetes (on insulin therapy), history of cancer,chronic kidney or liver disease, bleeding tendencies, venereal disease etc. </li>
	<li>major surgery in the last 6 months.</li>
	<li>vaccination in the last 24 hours.</li>
	<li>had a miscarriage in the last 6 months or have been pregnant / lactating in the last one year. </li>
	<li>had fainting attacks during last donation.</li>
	<li>have regularly received treatment with blood products.</li>
	<li>shared a needle to inject drugs/ have history of drug addiction. </li>
	<li>had sexual relations with different partners or with a high risk individual.</li>
	<li>been tested positive for antibodies to HIV.</li><br>

<b>Pregnancy And Menstrual Cycle</b><br>
	<br>
	<li>Females should not donate blood during pregnancy.</li>
	<li>They can donate after 6 months following a normal delivery and when they are not breast feeding.</li>
	<li>Females should not donate blood if they are having heavy menstrual flow or menstrual cramps.</li>

</p>
</div>

</body>
</html>