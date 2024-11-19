<?php
// Email details
$to = "gujjarahsan87@gmail.com"; // Replace with the recipient's email address
$subject = "Test";       // Subject of the email
$message = "This is a test email sent using PHP."; // Message body

// Sender's details
$senderEmail = "aahsanakram134@gmail.com"; // Replace with the sender's email address
$senderName = "John Doe";            // Replace with the sender's name

// Headers
$headers = "From: $senderName <$senderEmail>\r\n"; // Sets the sender's name and email
$headers .= "Reply-To: $senderEmail\r\n";          // Reply-to email address
$headers .= "X-Mailer: PHP/" . phpversion();       // Additional headers

// Send the email
if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully to $to!";
} else {
    echo "Failed to send email.";
}
?>
