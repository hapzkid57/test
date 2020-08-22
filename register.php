<?php 
	require 'dbconfig/config.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body style ="background-color:#bdc3c7">
	<div id="main-wrapper">
		<center><h2>Registration Form</h2>
			<img src="img/avatar.jpg" class="avatar">
		</center>
		<form class="myform" action="register.php" method="POST">
			<label><b>Username</b></label><br>
			<input name="username"type="text" class ="inputvalues" placeholder=" Enter username" required><br>
			<label><b>Password</b></label><br>
			<input name="password" type="text" class="inputvalues" placeholder="Enter Password" required><br>
			<label><b>Confirm Password</b></label><br>
			<input name="cpassword"type="text" class="inputvalues" placeholder="Enter Password again" required><br>
			<input name="submit_btn"type="submit" id="signup_btn" value="SignUp"><br>
			<a href="index.php"><input type="button" id="back_btn" value="Back"></a>
		</form>

				<?php 
					if(isset($_POST['submit_btn']))
					{
					//echo '<script type="text/javascript"> alert("Sign up button clicked") </script>';
						$username = $_POST['username'];
						$password = $_POST['password'];
						$cpassword = $_POST['cpassword'];

						if($password==$cpassword)
						{
							$query = "select * from user WHERE username='$username'";
							$query_run = mysqli_query($con,$query);

							if (mysqli_num_rows($query_run)>0)
							{
								echo '<script type="text/javascript"> alert("User already exist try another username") </script>';
							}
							else
							{
								$query = "insert into user value('$username', '$password')";
								$query_run = mysqli_query($con,$query);
								if($query_run)
								{
									echo '<script type="text/javascript"> alert("User Registered... Go to login page to login") </script>';		
								}
								else
								{
									echo '<script type="text/javascript"> alert("Error !!!") </script>';
								}
							}
						}
						else{
							echo '<script type="text/javascript"> alert("password and confirm password doesnot match") </script>';
						}
					}
 				?>

	</div>
</body>
</html>