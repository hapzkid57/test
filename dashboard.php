<?php 
    session_start();
    require 'dbconfig/config.php';
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
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
        <center><h2>Home Form</h2>
                <h3>Welcome 
                <?php 
                    echo $_SESSION['username'];
                 ?>
                 </h3>
            <img src="img/avatar.jpg" class="avatar">
        </center>
       <!--  <form class="myform" action="register.php" method="POST">
           <input name="edit"type="submit" id="edit_btn" value="Edit"><br>
        </form> -->
    </div>
</body>
</html>

"This is change in data"
