<?php
$name = $_POST["name"];
$email = $_POST["email"];
$contact = $_POST["contact"];
$message = $_POST["message"];
$elite_email = "chrisryankent@gmail.com"; // Update this to your desired email address
$subject = "work";
$headers = "From: $name <$email>\r\n";
$headers .= "Contact: $contact\r\n";

if (mail($elite_email, $subject, $message, $headers)) {
    header("Location: contact_us.html");
} else {
    echo "Email sending failed.";
}
?>
