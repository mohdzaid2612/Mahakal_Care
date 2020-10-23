<?php
  
  If(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone_number'];
    $sub = $_POST['subject'];
    $textt = $_POST['message'];


    $to = 'mzaid6961@gmail.com';
    $subject = 'Form Submission';
    $messagee = "Name :".$name."\n"."Phone :".$phone."\n". "Text :".$textt;
    $headers = "From :".$email;

    if(mail($to, $subject, $messagee,$headers)){
      echo "<h1>Sent SuccessFully</h1>";
    }
    else{
      echo "<h1>Try Again</h1>";
    }
  }

?>
