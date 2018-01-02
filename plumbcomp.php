<?php include('pcomplaint.php'); ?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Complaint Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
<h2>Complaints</h2>
</div>

<form method="post" action="plumbcomp.php">
  <!-- Display validation errors here -->
  <?php include('errors.php'); ?>
  <?php include('messages.php'); ?>
  <div class="input-group">
    <label>Your Plumber Related Problem</label>
    <input type="text" name="plumbcomp">
  </div>
  <div class="input-group">
    <button type="submit" name="submit" class="btn">Submit</button>
  </div>
  <p>
    Not any problem? <a href="login.php">Logout</a>
  </p>

  <div class="input-group">
    <button type="submit" name="view" class="btn" ><h2>View Previous Complaints</h2><?php if (isset($_POST['view'])) { header('location: pdetails.php');} ?></button>
  </div>

</form>
</body>
</html>