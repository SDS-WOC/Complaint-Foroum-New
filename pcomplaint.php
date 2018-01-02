<?php include('fillData.php'); ?>
 <?php

	    $plumbcomp="";
	    $errors= array();
	    $messages= array();

	    if (isset($_SESSION['enrollmentno'])) {
        	$enrollmentno= $_SESSION['enrollmentno'];
        }

	    //connect to the database
	    $db = mysqli_connect('localhost', 'root', 'greatabhi', 'UserRegister');

	    // if the submit button is clicked
	    if (isset($_POST['submit'])) {
	    	$plumbcomp = mysqli_real_escape_string($db, $_POST['plumbcomp']);

	    	// ensure that form fields are filled properly
	        if (empty($plumbcomp)) {
	    		array_push($errors, "Invalid request");
	    	}
	    	

	    	// if there are no errors, save complaint to table
	    	if (count($errors) == 0) {
	    		$sql = "INSERT INTO pcomplaints (enrollmentno, plumbcomp) VALUES ('$enrollmentno', '$plumbcomp')";
	    		mysqli_query($db, $sql);
	    		array_push($messages, "Your Complaint has been Recorded");
	   
	    	}


	    }

	


    //logout
	    if (isset($_POST['Logout'])) {
	    	session_destroy();
	    	unset($_SESSION['enrollmentno']);
	    } 

?>	   