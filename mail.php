<?php
// if(isset( $_POST['name']))
// $name = $_POST['name'];
// if(isset( $_POST['tel']))
// $tel = $_POST['tel'];
// if(isset( $_POST['email']))
// $email = $_POST['email'];
// if(isset( $_POST['message']))
// $message = $_POST['message'];


// $content="From: $name \n Tel: $tel \n Email: $email \n Message: $message";
// $recipient = "talavuanbs27@gmail.com";
// $mailheader = "From: $email \r\n";
// mail($recipient, $content, $mailheader) or die("Error!");
// echo "Email sent!";

// if(isset( $_POST['name']))
// $name = $_POST['name'];
// if(isset( $_POST['email']))
// $email = $_POST['email'];
// if(isset( $_POST['message']))
// $message = $_POST['message'];
// if(isset( $_POST['tel']))
// $tel = $_POST['tel'];
// if ($name === ''){
// echo "Name cannot be empty.";
// die();
// }
// if ($email === ''){
// echo "Email cannot be empty.";
// die();
// } else {
// if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
// echo "Email format invalid.";
// die();
// }
// }
// if ($tel === ''){
// echo "Tel cannot be empty.";
// die();
// }
// if ($message === ''){
// echo "Message cannot be empty.";
// die();
// }
// $content="From: $name \nEmail: $email \nMessage: $message";
// $recipient = "youremail@here.com";
// $mailheader = "From: $email \r\n";
// mail($recipient, $subject, $content, $mailheader) or die("Error!");
// echo "Email sent!";


$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$subject = $_POST['subject'];
header('Content-Type: application/json');
if ($name === ''){
  print json_encode(array('message' => 'Name cannot be empty', 'code' => 0));
  exit();
}
if ($email === ''){
  print json_encode(array('message' => 'Email cannot be empty', 'code' => 0));
  exit();
} else {
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
  print json_encode(array('message' => 'Email format invalid.', 'code' => 0));
  exit();
  }
}
if ($subject === ''){
  print json_encode(array('message' => 'Subject cannot be empty', 'code' => 0));
  exit();
}
if ($message === ''){
  print json_encode(array('message' => 'Message cannot be empty', 'code' => 0));
  exit();
}
$content="From: $name \nEmail: $email \nMessage: $message";
$recipient = "talavuanbs27@gmail.com";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");
print json_encode(array('message' => 'Email successfully sent!', 'code' => 1));
exit();

?>