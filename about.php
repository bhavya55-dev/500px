<?php
	include("connection/config.php"); 
	session_start();
	$loggedonuser = $_SESSION['username'];

	if ($loggedonuser == null) 
	{
		 header('location: login.php');	
	}
    $q = mysqli_query($conn,"SELECT * FROM `$loggedonuser`");
?>
<!DOCTYPE html>
<html>
<head>
	<title>About</title>
	<link rel="stylesheet" type="text/css" href="css/about.css">
</head>
<body>
	<div id="navbar" class="navbar">
		<a id="left" href="feed.php"><img class="logo" src="Photos/LOGO.png"></a>
		<a id="left" href="discover.php">Discover</a>
		<a id="left" href="about.php">About</a>
		<a id="right" href="logout.php">LOG OUT</a>
		<div id="right" class="small-profile-circle"><a href="account.php"><?php 
																		if ($row = mysqli_fetch_assoc($q))
																		{
			 																echo "<img class='pic' src='userdata/$loggedonuser/".$row['pimage']."' alt='Profile Pic'>";
																		}
		 														?></a>
		 </div>
		<div id="right" class="serch"></div>
	</div>
	<div class="about"><center><p>About</p><div class="underline"></div></center></div>
	<div class="photo">
		<img src="Photos/about.jpg">
		<div class="text">
			<center>The community for passionate photographers</center>
		</div>
		<div class="subtext">
			<center><p>Join over 13 million photographers from 190 countries to connect, get inspired, and<br> grow your skills.</center>
		</div>
	</div>
	<div class="lasttext">
		<center>Share your passion with the world</center> 
	</div>
	<div class="sublasttext">
		<center>From mobile photographers to professionals, 500px has the products and features <br>to take your photography to the next level.</center> 
	</div>
	<div class="office">
		<center><p>Office</p></center>
		<center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3078.3928827730406!2d-122.08616933817412!3d37.42301199497815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fba02425dad8f%3A0x6c296c66619367e0!2sGoogleplex!5e0!3m2!1sen!2sin!4v1535960137750" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe></center>
	</div>
</body>
</html>
<script type="text/javascript">
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>