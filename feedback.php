<?php
include'dbh.php';
if(count($_POST)>0) {
	//require_once("dbh.php");
	$sql = "INSERT INTO `feedback`(FullName,EmailId,ContactNumber,Occupation,Location,text) VALUES ('" . $_POST["FullName"] . "','" . $_POST["EmailId"] . "','" . $_POST["ContactNumber"] . "','" . $_POST["Occupation"] . "','" . $_POST["Location"] . "','" . $_POST["text"] . "')";
	$r=mysqli_query($conn,$sql);
	//$current_id = mysqli_insert_id($conn);
    $text = $_POST['text'];
    $headers = 'From:'. $EmailId . "\r\n";
    $headers .= 'Cc:'. $EmailId . "\r\n";
    mail("harihanth8@gmail.com", $text, $headers);
    echo "Thank you for your feedback";
	if($r){//if(!empty($current_id)) {
		//$message = "Thanks for your Feedback";
		
		header("Location:home.php");
        
            
    
        
	}
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>MediDrop</title>

</head>
<style>
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

</style>
<link rel="shortcut icon" href="icon.ico" />
<body>

<img src="medidrop.jpg" alt="Medidrop" style="width:220px;height:100px; padding:20px;">

<nav>
    <ul>
	<li><a href="home1.php">Home</a></li>
	<li><a href="about1.php">About Us</a></li>
	<li><a href="contact1.php">Contact Us</a></li>
	<li><a class="active" href="feedback.php">Feedback</a></li>
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

<h1>Feedback Form:</h1>
<form action="" method="POST">
<fieldset>

<p>Full Name : <input type="text" id="FullName" name="FullName" maxlength="20"></p>

<p>Email Id : <input type="text" id="EmailId" name="EmailId" ></p>

<p>Contact Number : +91<input type="text" id="ContactNumber" name="ContactNumber" maxlength="10"></p>

<p>Occupation : <input type="text" id="Occupation" name="Occupation" ></p>

<p>Location : <input type="text" id="Location" name="Location" ></p>

<p>Feedback:
<textarea name="text">
</textarea>
</p>

<aside><input type="submit" value="Submit" oninput="myfun()"></aside>

<script >
    function myfun(){
      window.alert("thanks for feedback");
    }
</script>

</fieldset>
</form>
</body>
</html>










