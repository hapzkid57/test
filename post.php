<?php 
	require 'dbconfig/config.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Post</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="sidenav"> <!--First Column -->
    	<a href="dashboard.php">Dashboard</a>
    	<a href="post.php">Post</a>
    	<a href="logout.php">Logout</a>
    </div>
    <div class=" col-md-10"> <!--Second COlumn -->
    	<div class="row">
    <div class="main"> 
    	<form class="myform" action="homepage.php" method="POST">
    		<input class="textbox"name="textbox"type="text" placeholder="Write post"><br>
    		<a href="post.php"><input name="post_text"type="submit" id="post_btn" value="Post"></a><br>
    		
        </form>
        <?php 
        	if(isset($_POST['post_btn']))
        	{
        		$post_data = $_POST['post_text'];

        		$query = "insert into add_post value('$post_data')";
								$query_run = mysqli_query($con,$query);
								if($query_run)
								{
									echo '<script type="text/javascript"> alert("The data has been posted") </script>';		
								}
								else
								{
									echo '<script type="text/javascript"> alert("Error !!!") </script>';
								}
        	}
         ?>
	</div>
</body>
</html>