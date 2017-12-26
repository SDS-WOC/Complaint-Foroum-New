<?php include('fillData.php'); ?>

<!DOCTYPE HTML>
<html>
<head>
	<title>Redirect to login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
<h2>Successfully Registetered</h2>
</div>

<div class="content">
	<?php if (isset($_SESSION['success'])) {
	    echo $_SESSION['success'];
	    // unset($_SESSION['success']);
	} ?>
	 		

	<?php if (isset($_SESSION['name'])){
	    echo $_SESSION['name'];
	    // unset($_SESSION['name']);
	} ?>

    <p><a href="login.php" style="color: red;">Go Back</a></p>
	
</div>

</body>
</html>	    


