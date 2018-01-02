<?php include('adminlogin.php'); ?> 
<!DOCTYPE HTML>
<html>
<head>
	<title>Admin Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
<h2>Hi Abhijeet</h2>
</div>

<form method="post" action="admin.php">
  <!-- Display validation errors here -->
  <?php include('errors.php'); ?>
  <div class="input-group">
    <label>Enter Your Password</label>
    <input type="password" name="adminpass">
  </div>
  <div class="input-group">
    <button type="submit" name="login" class="btn">Login</button>
  </div>
  <p>
    Not an Admin? <a href="main.html">User</a>
  </p>
</form>
</body>
</html>