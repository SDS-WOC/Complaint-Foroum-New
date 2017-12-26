<?php include('fillData.php'); ?> 
<!DOCTYPE HTML>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
<h2>Login</h2>
</div>

<form method="post" action="login.php">
  <!-- Display validation errors here -->
  <?php include('errors.php'); ?>
  <div class="input-group">
    <label>Enrollment No</label>
    <input type="text" name="enrollmentno">
  </div>
  <div class="input-group">
    <label>Password</label>
    <input type="password" name="password">
  </div>
  <div class="input-group">
    <button type="submit" name="login" class="btn">Login</button>
  </div>
  <p>
    Not yet registered? <a href="signup.php">Sign Up</a>
  </p>
</form>
</body>
</html>