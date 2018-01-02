
 <?php

	    $enrollmentno="";
	    $feedback="";
	    $errors= array();
        $messages= array();

	    //connect to the database
	    $db = mysqli_connect('localhost', 'root', 'greatabhi', 'UserRegister');

	    // if the submit button is clicked
	    if (isset($_POST['submit'])) {
	    	$enrollmentno = mysqli_real_escape_string($db, $_POST['enrollmentno']);
	    	$feedback = mysqli_real_escape_string($db, $_POST['feedback']);


	    	// ensure that form fields are filled properly
	        if (empty($enrollmentno)|| empty($feedback)) {
	    		array_push($errors, "Invalid request");
	    	}
	    	
	    	

	    	// if there are no errors, save complaint to table
	    	if (count($errors) == 0) {
	    		$sql = "INSERT INTO feedbacks (enrollmentno, feedback) VALUES ('$enrollmentno', '$feedback')";
	    		mysqli_query($db, $sql);
	    		array_push($messages, "Thanks for your feedback");
                
	    	}
        }

?>	    
