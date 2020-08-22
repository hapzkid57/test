<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<!-- nav bar -->
	<!-- <nav class="navbar navbar-dark bg-dark p-2 shadow"> 
        <a class="navbar-brand" href="homepage.php"> 
          Sample Test 
      </a> 
    </nav> --> 
    <div class="sidenav"> <!--First Column -->
    	<a href="dashboard.php">Dashboard</a>
    	<a href="post.php">Post</a>
    	<a href="logout.php">Logout</a>
    </div>
    <div class=" col-md-10"> <!--Second COlumn -->
    	<div class="row">
    <div class="main"> 
    	<p>Hey.........................</p>
	</div>
    <!-- Page Content -->
</body>




<!-- <body style ="background-color:#bdc3c7">
	<div id="main-wrapper">
		<center><h2>Home Form</h2>
				<h3>Welcome 
				<?php 
					echo $_SESSION['username'];
				 ?></h3>
			<img src="img/avatar.jpg" class="avatar">
		</center>
		<form class="myform" action="homepage.php" method="POST">
			<input name="logout"type="submit" id="logout_btn" value="Log out"><br>
		</form>
		<?php 
		if(isset($_POST['logout']))
		{
		    session_destroy();
		    header('location:index.php');
		}
		 ?>
	</div>
</body> -->

</html>