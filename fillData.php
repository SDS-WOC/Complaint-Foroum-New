	<?php
	    session_start();

	    $name= "";
	    $roomno= ""; 
	    $enrollmentno= "";
	    $errors= array();

	    //connect to the database
	    $db = mysqli_connect('localhost', 'root', 'greatabhi', 'UserRegister');

	    // if the register button is clicked
	    if (isset($_POST['register'])) {
	    	$name = mysqli_real_escape_string($db, $_POST['name']);
	    	$roomno = mysqli_real_escape_string($db, $_POST['roomno']);
	    	$enrollmentno = mysqli_real_escape_string($db, $_POST['enrollmentno']);
	    	$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
	    	$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

	    	// ensure that form fields are filled properly
	    	if (empty($name)) {
	    		array_push($errors, "Name is required");
	    	}
	    	if (empty($roomno)) {
	    		array_push($errors, "Room No is required");
	    	}
	    	if (empty($enrollmentno)) {
	    		array_push($errors, "Enrollment No is required");
	    	}
	    	if (empty($password_1)) {
	    		array_push($errors, "Password is required");
	    	}

	    	if ($password_1 != $password_2) {
	    		array_push($errors, "The two passwords do not match");
	    	}
	    	

	    	// if there are no errors, save user to database
	    	if (count($errors) == 0) {
	    		$password = md5($password_1); //encrypt password
	    		$sql = "INSERT INTO Data  (name, roomno, enrollmentno, password)
                                VALUES ('$name', '$roomno', '$enrollmentno', '$password')";
	    		mysqli_query($db, $sql);
	    		$_SESSION['name'] = $name;
	    		$_SESSION['success'] = "Now, You can easily login";
	    		header('location: redirect.php'); //redirect user to login portal
	    	}


	    }

	    //log user in from login page
	    if (isset($_POST['login'])){
	    	$enrollmentno = mysqli_real_escape_string($db, $_POST['enrollmentno']);
	    	$password = mysqli_real_escape_string($db, $_POST['password']);

	    	// ensure that form fields are filled properly 
	    	if (empty($enrollmentno)) {
	    		array_push($errors, "Enrollment No is required");
	    	}
	    	if (empty($password)) {
	    		array_push($errors, "Password is required");
	    	}

	    	if (count($errors) == 0) {
	    		$password= md5($password); //encrypt password before comparing with that in database
	    		$query = "SELECT * FROM Data WHERE enrollmentno='$enrollmentno' AND password='$password'";
	    		$result = mysqli_query($db, $query);
	    		if (mysqli_num_rows($result) == 1) {
	    			//log user in
	    			$_SESSION['name'] = $name;
	    			$_SESSION['success']= "You are now logged in";
	    			header('location: home.php');
	    		}else{
	    			array_push($errors, "wrong username/password combination");
	    		}
	    	}


	    }

	    //after registration
	    if (isset($_GET['Go Back'])) {
	    	session_destroy();
	    	unset($_SESSION['name']);
	    } 

	    //logout
	    if (isset($_GET['Logout'])) {
	    	session_destroy();
	    	unset($_SESSION['enrollmentno']);
	    } 

    ?>