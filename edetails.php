<?php include('fillData.php'); ?>
<?php

if (isset($_SESSION['enrollmentno'])) {
	$enrollmentno = $_SESSION['enrollmentno'];
}

$db = mysqli_connect('localhost', 'root', 'greatabhi', 'UserRegister');

$sql = "SELECT enrollmentno, electcomp FROM complaints WHERE enrollmentno=$enrollmentno";
$result = mysqli_query($db, $sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Complaint Records</title>
    <link rel="stylesheet" type="text/css" href="style.css">  
    <style type="text/css">
		table {
			border-collapse: ;
			width: 50%;
			color: #5F9EA0;
			font-size: 25px;
			text-align: left;
		}
		th {
			background-color: #f2dede;
			color: #a94442;
		}

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
	<h2>Complaint Records</h2>
    </div>
	<table border="1" align="center" style="line-height: 25px;">
		<tr>
			<th>EnrollmentNo</th>
			<th>Electric Complaint</th>
		</tr>
<?php
 //fetch data from database
 if (mysqli_num_rows($result) > 0) {
 	while ($row = mysqli_fetch_assoc($result)) {
 		?>
 		<tr>
 			<td><?php echo $row['enrollmentno']; ?></td>
 			<td><?php echo $row['electcomp']; ?></td>
 		</tr>
 		<?php 	
 	}
 }	
 else {
 	?>
 	<tr>
 		<th colspan="2">Data not found!!</th>
 	</tr>
 	<?php
 }	
?>
</table>

<br><br><br>
 <nav>
      <ul>
        <li><a href="home.php"><b>Home</b></a></li>
    </ul>
</nav>

</body>
</html>



