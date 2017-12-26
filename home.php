<?php include('fillData.php'); ?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Home Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
<h2>Area of Problem</h2>
</div>

<form method="post" action="home.php">
  <!-- Display validation errors here -->
  <?php include('errors.php'); ?>
  <div class="input-group">
    <button type="submit" name="Electrician" class="btn">Electrician</button>
  </div>
  <div class="input-group">
    <button type="submit" name="Plumber" class="btn">Plumber</button>
  </div>
  <div class="input-group">
    <button type="submit" name="Carpenter" class="btn">Carpenter</button>
  </div>
  <p>
    Not any problem? <a href="login.php">Logout</a>
  </p>
</form>
</body>
</html>
