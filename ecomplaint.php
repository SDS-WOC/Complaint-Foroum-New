<?php include('fillData.php'); ?>
 <?php

	    $electcomp="";
	    $errors= array();
        $messages= array();

        if (isset($_SESSION['enrollmentno'])) {
        	$enrollmentno= $_SESSION['enrollmentno'];
        }

	    //connect to the database
	    $db = mysqli_connect('localhost', 'root', 'greatabhi', 'UserRegister');

	    // if the submit button is clicked
	    if (isset($_POST['submit'])) {
	    	$electcomp = mysqli_real_escape_string($db, $_POST['electcomp']);

	    	// ensure that form fields are filled properly
	        if (empty($electcomp)) {
	    		array_push($errors, "Invalid request");
	    	}
	    	

	    	// if there are no errors, save complaint to table
	    	if (count($errors) == 0) {
	    		$sql = "INSERT INTO complaints (enrollmentno, electcomp) VALUES ('$enrollmentno', '$electcomp')";
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
