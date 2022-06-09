
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>contact us</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php

$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$subject=$_REQUEST['subject'];
$phoneno=$_REQUEST['phoneno'];
$address=$_REQUEST['address'];
$message=$_REQUEST['message'];

	if (empty($name) || empty($email) || empty($subject) || empty($phoneno) || empty($address) || empty($message)) {

		echo "Please fill all the fields";
	}
	else{
		mail("adhikaritushant124@gmail.com","tushant adhikari personal website" , $message);
		echo "<script>alert("your message was sent")</script>";
	}
?>

	<div class="container">
		<div class="navbar">
			<div class="logo">
				<img src="logo.png" height="50px" width="50px">
				<h3>Tushant Adhikari</h3>
				
			</div>

			<div class="menu">
				<ul>
					<li><a href="/personalwebsite/index.html">Home</a></li>
                    <li><a href="/personalwebsite/about.html">About</a></li>
                    <li><a href="/personalwebsite/services.html">Services</a></li>
                    <li><a href="/personalwebsite/contact.html">Contact</a></li>

				</ul>

			</div>
		</div>

		<div class="form">
			<h1>Contact Us</h1>
			<h2 class="hj">Contact form</h2>
			
			<form method="post" id="frm" action="localhost/index.php">
				<label>Name:</label>
				<input type="text" name="name" id="name" placeholder="Enter your name" autocomplete="off"><br>
				<label>Email:</label>
			   	<input type="text" name="email" id="email" placeholder="Enter your email" autocomplete="off"><br>
			   	<label>subject</label>
			   	<input type="text" name="subject" id="subject" placeholder="Enter the subject" autocomplete="off"><br>
			   	<label>Phone no:</label>
				<input type="text" name="phoneno" id="phoneno" placeholder="Enter your phone no."autocomplete="off"><br>
				<label>Address:</label>
				<input type="text" name="address" id="address" placeholder="Enter your address"autocomplete="off"><br>
				<h2>Message</h2>
                <textarea type="text" name="message" id="message" rows="8"autocomplete="off"> Enter the Message</textarea>
                <button type="submit" id="btn">Submit</button>
			</form>
		</div>
	</div>

</body>