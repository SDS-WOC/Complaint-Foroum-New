<?php include('fillData.php'); ?>

<!DOCTYPE HTML>
<html>
<head>
	<title>Problem Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
<h2>Area of Problem</h2>
</div>

<form method="post" action="home.php">

  <div class="input-group">
    <button type="submit" name="electrician" class="btn"><h3>Electrician</h3><?php if (isset($_POST['electrician'])) { header('location: electcomp.php');} ?></button>
  </div>
  <div class="input-group">
    <button type="submit" name="plumber" class="btn"><h3>Plumber</h3><?php if (isset($_POST['plumber'])) { header('location: plumbcomp.php');} ?></button>
  </div>
  <div class="input-group">
    <button type="submit" name="carpenter" class="btn"><h3>Carpenter</h3><?php if (isset($_POST['carpenter'])) { header('location: carpcomp.php');} ?></button>
  </div>     
  <p>
    Not any problem? <a href="login.php">Logout</a>
  </p>
 
</form>
</body>
</html>
