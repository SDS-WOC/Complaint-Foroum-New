
<?php

$db = mysqli_connect('localhost', 'root', 'greatabhi', 'UserRegister');

$sql = "SELECT  * FROM pcomplaints";
$sql_1 = "SELECT * FROM complaints";
$sql_2 = "SELECT * FROM ccomplaints";
$result = mysqli_query($db, $sql);
$result_1 = mysqli_query($db, $sql_1);
$result_2 = mysqli_query($db, $sql_2); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Total Complaints</title>
    <link rel="stylesheet" type="text/css" href="style.css">  
    <style type="text/css">
		table {
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
	<table border="1" align="center" style="line-height: 25px;">
		<caption><h2>Plumber Complaints</h2></caption>
		<tr>
			<th>EnrollmentNo</th>
			<th>Complaint</th>
		</tr>
<?php
 //fetch data from database
 if (mysqli_num_rows($result) > 0) {
 	while ($row = mysqli_fetch_assoc($result)) {
 		?>
 		<tr>
 			<td><?php echo $row['enrollmentno']; ?></td>
 			<td><?php echo $row['plumbcomp']; ?></td>
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

	<table border="1" align="center" style="line-height: 25px;">
		<caption><h2>Electrician Complaints</h2></caption>
		<tr>
			<th>EnrollmentNo</th>
			<th>Complaint</th>
		</tr>
<?php
 //fetch data from database
 if (mysqli_num_rows($result_1) > 0) {
 	while ($row = mysqli_fetch_assoc($result_1)) {
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

	<table border="1" align="center" style="line-height: 25px;">
		<caption><h2>Carpenter Complaints</h2></caption>
		<tr>
			<th>EnrollmentNo</th>
			<th>Complaint</th>
		</tr>
<?php
 //fetch data from database
 if (mysqli_num_rows($result_2) > 0) {
 	while ($row = mysqli_fetch_assoc($result_2)) {
 		?>
 		<tr>
 			<td><?php echo $row['enrollmentno']; ?></td>
 			<td><?php echo $row['carpcomp']; ?></td>
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
        <li><a href="admin.php"><b>Logout</b></a></li>
    </ul>
</nav>
</body>
</html>




