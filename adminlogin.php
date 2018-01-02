
 <?php

      $adminpass="";
      $errors= array();

      //connect to the database
      $db = mysqli_connect('localhost', 'root', 'greatabhi', 'UserRegister');

      // if the login button is clicked
      if (isset($_POST['login'])) {
        $adminpass = mysqli_real_escape_string($db, $_POST['adminpass']);

        // ensure that form fields are filled properly
          if (empty($adminpass) || $adminpass != 'abhijeet') {
          array_push($errors, "password is incorrect");
        }

        // if there are no errors, login admin
        if (count($errors) == 0) {
          header('location: admindetails.php');
                
        }


      }

  


    //logout
      if (isset($_POST['Logout'])) {
        session_destroy();
        unset($_SESSION['enrollmentno']);
      } 

?>      
