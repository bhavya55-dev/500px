<?php 
	include("connection/config.php");
	$errors = array();

	if (isset($_POST['login'])) 
			{
				
			  $username =$_POST['username'];
			  $password =$_POST['password'];
				session_start();
				$_SESSION['username'] = "$username";

			  if (empty($username))
			  {
			  	array_push($errors, "Username is required");
			  }
			  if (empty($password))
			  {
			  	array_push($errors, "Password is required");
			  }
			  

			  if (count($errors) == 0) 
			  {
			  	$password = md5($password);
			  	$query = "SELECT * FROM userdata WHERE username='$username' AND password='$password'";
			  	$result = mysqli_query($conn, $query);
			  	$count = mysqli_num_rows($result);
			  	if($count == 1) 
			  	{
			  	  header('location: account.php');
			  	}
			  	else 
			  	{
			  		array_push($errors, "Wrong username/password combination");
			  	}
			  }
			}
	
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Log in</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body style="margin: 0px; overflow: hidden;">
	<div class="content">
		<FORM ction="feed.html" method="post">
			<FIELDSET>
				<legend align="center">LOG IN</legend>
					<?php include('errors.php'); ?>
					<input class="txt" type="text" name="username" placeholder="USERNAME">
					<input class="txt" type="password" name="password" placeholder="PASSWORD">
					 Not a member? <a href="signup.php">Sign up</a>
					<a href="account.html"><button class="btn" name="login" >LOG IN</button></a>			
			</FIELDSET>
		</FORM>	
	</div>	
</body>
</html>