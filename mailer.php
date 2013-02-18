<?php
function spamcheck($field)
  {
  //filter_var() sanitizes the e-mail
  //address using FILTER_SANITIZE_EMAIL
  $field=filter_var($field, FILTER_SANITIZE_EMAIL);

  //filter_var() validates the e-mail
  //address using FILTER_VALIDATE_EMAIL
  if(filter_var($field, FILTER_VALIDATE_EMAIL))
    {
    return TRUE;
    }
  else
    {
    return FALSE;
    }
  }


if(isset($_POST['email'], $_POST['message'])) {

//check if the email address is invalid
  $mailcheck = spamcheck($_POST['email']);
  if ($mailcheck==FALSE){
  
  		 echo "Invalid input";
  		 
    } else{  //send email
    
   		$to = "zainabebrahimi@gmail.com";
		$subject = "Mail from Dr.Ebrahimi.com";
		$name_field = $_POST['name'];
		$email_field = $_POST['email'];
		$message = $_POST['message'];
		$headers = "From:" . $from;
 
		$body = "From: $name_field\n\n E-Mail: $email_field\n\n Message:\n $message";
 
		mail($to, $subject, $body);

		echo '<strong>Thank you, your email was sent sucessfully to Dr. Ebrahimi.</strong>';
    
    }
    
} else {

echo '<strong style="color:#EA3885;">Error. One or more fields were not filled out. Please try again.</strong>';
}
?> 