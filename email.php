<?php
  $message = 'name: ' . $_POST['name'] . "<br>" . 'email: ' . $_POST['email'] .  "<br><br>" . $_POST['message'];

  $headers =  'MIME-Version: 1.0' . "\r\n";
  $headers .= 'From: Your name <thomas@beardiegames.com>' . "\r\n";
  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

  $success = mail('thomas@beardiegames.com', 'Contact Msg (' . $_POST['name'] . ')', $message, $headers);

  if ($success) {
   header("Location: /email_success.html");
   exit;
  } else {
   header("Location: /email_error.html");
   exit;
  }
?>
