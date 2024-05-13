<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $message = $_POST['message'];

  $to = "surendarsenthilvelan@gmail.com"; // Enter your email address here
  $subject = "New Contact Form Submission";
  $body = "Name: $name\nEmail: $email\nMobile: $mobile\n\n$message";

  if (mail($to, $subject, $body)) {
    echo "<p>Thank you! Your message has been sent.</p>";
  } else {
    echo "<p>Oops! Something went wrong. Please try again later.</p>";
  }
}
?>
