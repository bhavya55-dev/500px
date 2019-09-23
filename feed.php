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
	<title><?php $loggedonuser ?></title>
	<link rel="stylesheet" type="text/css" href="css/feed.css">
</head>
<body>
	<div id="navbar" class="navbar">
		<a id="left" href="feed.php"><img class="logo" src="Photos/LOGO.png"></a>
		<a id="left" href="discover.php">Discover</a>
		<a id="left" href="about.php">About</a>
		<a id="right" href="logout.php">LOG OUT</a>
		<a id="right" href=""><div class="upload"><div class="upload icon"></div><h3 class="uploadtxt">UPLOAD</h3></div></a>
		<div id="right" class="small-profile-circle"><a  href="account.php"><?php 
																		if ($row = mysqli_fetch_assoc($q))
																		{
			 																echo "<img class='pic' src='userdata/$loggedonuser/".$row['pimage']."' alt='Profile Pic'>";
																		}
		 														?>		 	
		 </a></div>
		<div id="right" class="serch"></div>
	</div>

	<center><div class="post">
				<div class="content">
					<div class="title">
					<div class="small-profile-circle">
							<a href="jazz.html"><img src="userdata/jazz/profilepic.jpg"></a>
						</div>
						<div class="name">jazz</div>
					</div>
					<img class="img" src="Photos/photo-8.jpg">
				</div>
				<div class="content">
					<div class="title">
						<div class="small-profile-circle">
							<a href="harsh.html"><img src="userdata/harsh/profilepic.png"></a>
						</div>
					<div class="name">harsh</div>
				</div>
				<img class="img" src="Photos/photo-28.jpg">
				</div>
				<div class="content">
					<div class="title">
						<div class="small-profile-circle">
							<a href="meet.html"><img src="userdata/meet/profilepic.png"></a>
						</div>
						<div class="name">meet</div>
					</div>
					<img class="img" src="Photos/photo-38.jpg">
				</div>
				<div class="content">
					<div class="title">
						<div class="small-profile-circle">
							<a href="gabbar1612.html"><img src="userdata/gabbar1612/profilepic.jpg"></a>
						</div>
						<div class="name">gabbar1612</div>
					</div>
					<img class="img" src="Photos/photo-48.jpg">
				</div>
				<div class="content">
					<div class="title">
						<div class="small-profile-circle">
							<a href="jazz.html"><img src="userdata/jazz/profilepic.jpg"></a>
						</div>
						<div class="name">jazz</div>
					</div>
					<img class="img" src="Photos/photo-18.jpg">
				</div>	
				<div class="content">
					<div class="title">
						<div class="small-profile-circle">
							<a href="jazz.html"><img src="userdata/jazz/profilepic.jpg"></a>
						</div>
						<div class="name">jazz</div>
					</div>
					<img class="img" src="Photos/photo-34.jpg">
				</div>
	</div></center>
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