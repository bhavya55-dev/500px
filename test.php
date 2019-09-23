<?php 
	include("connection/config.php");
	include("server.php");
	session_start();
	$loggedonuser = $_SESSION['username'];
	echo "$loggedonuser";

	$q = mysqli_query($conn,"SELECT type FROM  userdata WHERE id = 18 ");
	$row = $q->fetch_assoc();
	echo $row['type'];
?>