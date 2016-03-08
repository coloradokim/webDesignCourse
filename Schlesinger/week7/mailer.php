<?php
  require_once 'swiftmailer/lib/swift_required.php';

  $name = $_POST['name'];
  $fromEmail = $_POST['email'];
  $message = $_POST['message'];
 
  $transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
    ->setUsername('galvanize.test@gmail.com')
    ->setPassword('galvanize!');

  $mailer = Swift_Mailer::newInstance($transport);

  $message = Swift_Message::newInstance($subject)
    ->setFrom(array("galvanize.test@gmail.com" => "Galvanize Test"))
    ->setTo("kim.schlesinger@galvanize.com")
    ->setBody($message . ' from: ' . $fromEmail);

  if ($mailer->send($message)) {
    header('Location: thank-you.html');
  } else {
    echo 'Oh no it broke... :(';
  }
?>
