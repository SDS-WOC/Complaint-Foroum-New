<?php include('feedback.php'); ?> 
<!DOCTYPE HTML>
<html>
<head>
	<title>Feedback Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
  <style type="text/css">
    nav {
    background-color: #F8F8FF;
  }

    nav li {
    display: inline;
    margin: 0;
    padding: 0 10px;
  }

    nav ul {
    display: inline;
  }
  
  </style>
</head>
<body>

<div class="header">
<h2>Feedback</h2>
</div>

<form method="post" action="feed.php">
  <!-- Display validation errors here -->
  <?php include('errors.php'); ?>
  <?php include('messages.php'); ?>
  <div class="input-group">
    <label>Enrollment No</label>
    <input type="text" name="enrollmentno">
  </div>
  <div class="input-group">
    <label>Suggestions</label>
    <input type="text" name="feedback">
  </div>
  <div class="input-group">
    <button type="submit" name="submit" class="btn">Submit</button>
  </div>
</form>
<br><br><br>
 <nav>
      <ul>
        <li><a href="main.html"><b>Home</b></a></li>
    </ul>
</nav>

</body>
</html>