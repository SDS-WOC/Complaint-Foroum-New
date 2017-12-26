<?php include('fillData.php'); ?> 
<!DOCTYPE HTML>
<html>
<head>
  <title>Registration Page</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
<h2>Create Your Account</h2>
</div>
<form method="post" action="signup.php">
  <!-- Display validation errors here -->
  <?php include('errors.php'); ?>
  <div class="input-group">
    <label>Name</label>
    <input type="text" name="name" value="<?php echo $name; ?>">
  </div>
  <div class="input-group">
    <label>Room No</label>
    <input type="text" name="roomno" value="<?php echo $roomno; ?>">
  </div>
  <div class="input-group">
    <label>Enrollment No</label>
    <input type="text" name="enrollmentno" value="<?php echo $enrollmentno; ?>">
  </div>
  <div class="input-group">
    <label>Password</label>
    <input type="password" name="password_1">
  </div>
  <div class="input-group">
    <label>Confirm Password</label>
    <input type="password" name="password_2">
  </div>
  <div class="input-group">
    <button type="submit" name="register" class="btn">Register</button>
  </div>
  <p>
    Already registered? <a href="login.php">Login</a>
  </p>
 </form>
 
</body>
</html>
