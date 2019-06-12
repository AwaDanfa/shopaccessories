



<?php


include_once('db.php');
$has_error = false;

if(isset($_POST['submit'])){



    if (empty($_POST["fullname"])) {
        $error_fullname = "Fullname is required";
        $has_error = true;

      } else if (strlen($_POST["fullname"])<3 ) {
        $error_fullname = "At least 3 characters long ";
        $has_error = true;

      } else {
        $fullname = filter_users_input($_POST["fullname"]);
         
        
      }
     
  
      if(empty($_POST['email'])) {
          
                  $error_email = "<span class='error'>Please enter email</span>";
                  $has_error = true;
                  
                  } else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                      
                          $error_email = "<span class='error'>Please enter valid email.</span>";
                          $has_error = true;
                          
                              } else {
                                  $email = filter_users_input($_POST['email']);
                              }
        
  
      if( strlen ( trim ( $_POST["message"] ) ) == 0) {
        $error_message = "Message must not be empty ";
        $has_error = true;

      } else {
        $message = filter_users_input($_POST["message"]); 
       
      }



      if(!$has_error){


        insert_into_db();

      }
  
  
}



function filter_users_input($data) {
    
    // trim() function will remove whitespace from the beginning and end of string.
    $data = trim($data); 
    
    /* The stripslashes() function removes backslashes added by the addslashes() function.
       Tip: This function can be used to clean up data retrieved from a database or from an HTML form.*/
    $data = stripslashes($data);
    
    // htmlspecialchars() function converts special characters to HTML entities. Say '&' (ampersand) becomes '&amp;'
    $data = htmlspecialchars($data);
    return $data;
    
  }



  function insert_into_db(){


global  $fullname, $email, $message, $conn;

$sql = "INSERT INTO enquiry(fullname, email, message)
        VALUES ('$fullname', '$email', '$message')";

 mysqli_query($conn,$sql)  ;     
 $confirmMsg = "Your message is sent!";

header("Location:contact_form.php?confirm=$confirmMsg");


  }
?>





