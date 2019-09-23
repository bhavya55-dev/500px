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
	<link rel="stylesheet" type="text/css" href="css/discover.css">
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
	<div class="main">
		<p>What's popular today</p>
		<div class="title">
			Photos
			<div class="underline"></div>
		</div>
		<div class="photos">
			<div class="row"> 
				  <div class="column">
				    <img id="myimg" src="Photos/photo-1.jpg" style="width:100%">
				    <img id="myimg" src="Photos/photo-2.jpg" style="width:100%">
				    <img id="myimg" src="Photos/photo-3.jpg" style="width:100%">
				    <img id="myimg" src="Photos/photo-4.jpg" style="width:100%">
				    <img id="myimg" src="Photos/photo-5.jpg" style="width:100%">
				    <img id="myimg" src="Photos/photo-6.jpg" style="width:100%">
				    <img id="myimg" src="Photos/photo-7.jpg" style="width:100%">
				  </div>
				  <div class="column">
				    <img id="myimg" src="Photos/photo-8.jpg" style="width:100%">
				    <img id="myimg" src="Photos/photo-9.jpg" style="width:100%">
				    <img id="myimg" src="Photos/photo-10.jpg" style="width:100%">
				    <img id="myimg" src="Photos/photo-11.jpg" style="width:100%">
				    <img id="myimg" src="Photos/photo-12.jpg" style="width:100%">
				    <img id="myimg" src="Photos/photo-13.jpg" style="width:100%">
				    <img id="myimg" src="Photos/photo-28.jpg" style="width:100%">
				    <img id="myimg" src="Photos/photo-29.jpg" style="width:100%">
				  </div>  
				  <div class="column">
				    <img id="myimg" src="Photos/photo-14.jpg" style="width:100%">
				    <img id="myimg" src="Photos/photo-15.jpg" style="width:100%">
				    <img id="myimg" src="Photos/photo-16.jpg" style="width:100%">
				    <img id="myimg" src="Photos/photo-17.jpg" style="width:100%">
				    <img id="myimg" src="Photos/photo-18.jpg" style="width:100%">
				    
				  </div>
				  <!--div class="column">
				    <img src="Photos/photo-21.jpg" style="width:100%">
				    <img src="Photos/photo-22.jpg" style="width:100%">
				    <img src="Photos/photo-23.jpg" style="width:100%">
				    <img src="Photos/photo-24.jpg" style="width:100%">
				    <img src="Photos/photo-25.jpg" style="width:100%">
				    <img src="Photos/photo-26.jpg" style="width:100%">
				    <img src="Photos/photo-27.jpg" style="width:100%">
				  </div-->
				</div>
		</div>
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