<?php 
	include("server.php");
	session_start();
	$loggedonuser = $_SESSION['username'];
	$q = mysqli_query($conn,"SELECT type FROM  userdata WHERE username = '$loggedonuser'");
	$row = $q->fetch_assoc();
	if ($row['type'] == "Customer") 
	{
		 header('location: cfeed.php');		
	}

	if ($loggedonuser == null) 
	{
		 header('location: login.php');	
	}
	
    $q = mysqli_query($conn,"SELECT * FROM `$loggedonuser`");
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo "$loggedonuser"; ?></title>
	<link rel="stylesheet" type="text/css" href="CSS/account.css">
</head>
<body>
	<div id="navbar" class="navbar">
		<a id="left" href="feed.php"><img class="logo" src="Photos/LOGO.png"></a>
		<a id="left" href="discover.php">Discover</a>
		<a id="left" href="about.php">About</a>
		<a id="right" href="logout.php">LOG OUT</a>
		<a id="right" href="upload.html"><div class="upload">
									<div class="upload icon"></div><h3 class="uploadtxt">UPLOAD</h3>
							  </div></a>
		<div id="right" class="small-profile-circle"><a  href=""><?php 
																		if ($row = mysqli_fetch_assoc($q))
																		{
			 																echo "<img class='pic' src='userdata/$loggedonuser/".$row['pimage']."' alt='Profile Pic'>";
																		}
		 														?>		 	
		 </a></div>
		<div id="right" class="serch"></div>
	</div>
	<div class="spacebox"></div>
	<center><div class="profile-circle"><?php 
			 										echo "<img class='pic' src='userdata/$loggedonuser/".$row['pimage']."' alt='Profile Pic'>";
		 								?>					 	
	</div></center>
	<div class="detail-name">
		<center><p class="username"><?php echo "$loggedonuser"; ?></p></center>
		<div class="detail-button">
			<a href="firsteditprofile.php"><button class="second">Edit your profile</button></a>
			<button class="first">About you</button>
			<button class="third">Delete your account</button>
						
		</div>
	</div>
	<div class="photo-text"><center><p>Photos</p><div class="underline"></div></center></div>
	<div class="Photos">
		<div class="post"><img class="img" src="Photos/photo-8.jpg" alt="userphotos"></div>
		<div class="post"><img class="img" src="Photos/photo-18.jpg" alt="userphotos"></div>
		<div class="post"><img class="img" src="Photos/photo-34.jpg" alt="userphotos"></div>
		<div class="post"><img class="img" src="Photos/photo-14.jpg" alt="userphotos"></div>
		<div class="post"><img class="img" src="Photos/photo-24.jpg" alt="userphotos"></div>
		<div class="post"><img class="img" src="Photos/photo-25.jpg" alt="userphotos"></div>
		<div class="post"><img class="img" src="Photos/photo-14.jpg" alt="userphotos"></div>
		<div class="post"><img class="img" src="Photos/photo-6.jpg" alt="userphotos"></div>
		<div class="post"><img class="img" src="Photos/photo-3.jpg" alt="userphotos"></div>
		<div class="post"><img class="img" src="Photos/photo-9.jpg" alt="userphotos"></div>
		<div class="post"><img class="img" src="Photos/photo-5.jpg" alt="userphotos"></div>
		<div class="post"><img class="img" src="Photos/photo-30.jpg" alt="userphotos"></div>
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