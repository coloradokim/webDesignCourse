<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $POST['message'];

  $to = "kim.schlesinger@galvanize.com";
  $subject = "From KS's portfolio page";
  $emailcontent = "From: $name \n\n $message";
  $mailheader = "From: $email";

  mail($to, $subject, $emailcontent, $mailheader) or header('Location: emailerror.html');
  header('Location: thank-you.html');
?>
