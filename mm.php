<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];
  
  $to = "m05918833@gmail.com";
  $subject = "تم إرسال نموذج جديد";
  
  $body = "اسم: $name\n";
  $body .= "البريد الإلكتروني: $email\n";
  $body .= "رسالة: $message\n";
  
  // إرسال البريد الإلكتروني
  mail($to, $subject, $body);
}
?>
