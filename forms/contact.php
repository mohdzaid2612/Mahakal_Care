<?php
  
  $name = $_POST['name'];
  $email = $_POST['email'];
  $num = $_POST['phone_number'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];


  $to = "mzaid6961@gmail.com";
  $email_subject = "New Form submission";
  $email_body = "Hello , My name is $name, and i want $subject doctor. \n $message";
  $headers =  "Reply-To: $email \n";
  

  $sent = mail($to,$email_subject,$email_body,$headers);

  if ($sent){
    echo "Form Successfully Submitted !";
  }
  else{
    echo "Form Denied. Try Again..!";
  }

?>
