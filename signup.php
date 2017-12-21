<!DOCTYPE HTML>
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>

<h1>Create your account now</h1>
<br><br>
<?php
$nameerr=$rmnoerr=$enrolerr=$passerr=" ";
$name=$roomno=$enrollmentno=$password=" ";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["name"]))
		{$nameerr="name is required";}
	else {$name=$_POST["name"];}
	if (empty($_POST["roomno"]))
		{$rmnoerr="roomno is required";}
	else {$roomno=$_POST["roomno"];}
	if (empty($_POST["enrollmentno"]))
		{$enrolerr="enrollmentno is required";}
	else {$enrollmentno=$_POST["enrollmentno"];}
	if (empty($_POST["password"]))
		{$passerr="password is required";}
	else {$password=$POST["password"];}
}
?>
<p><span class="error">*required field.</span></p>
<form method="post" action="<?php $_SERVER["PHP_SELF"];?>">
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameerr;?></span>
  <br><br>
  RoomNo: <input type="text" name="roomno">
  <span class="error">* <?php echo $passerr;?></span>
  <br><br>
  EnrollmentNo: <input type="text" name="enrollmentno">
  <span class="error">* <?php echo $enrolerr;?></span>
  <br><br>
  Password: <input type="text" name="password">
  <span class="error">* <?php echo $passerr;?></span>
  <br><br>
  Repeat Password: <input type="text" name="password">
  <span class="error">* <?php echo $passerr;?></span><br>
  <input type="submit" name="Register" value="Register">
 </form> 
</body>
</html>