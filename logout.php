<?php 
    session_start();
    require 'dbconfig/config.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Logout</title>
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
    <div id="main-wrapper">
        <center><h2>Logout Form</h2>
                <h3>Good Bye
                <?php 
                    echo $_SESSION['username'];
                 ?>
                 </h3>
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
</body>
</html>