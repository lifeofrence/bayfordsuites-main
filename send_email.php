<?php
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate form inputs
    $name = trim($_POST['name']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $message = trim($_POST['message']);

    // Check if inputs are not empty
    if (empty($name) || empty($email) || empty($message)) {
        header("Location: error.html?message=Please fill in all fields.");
        exit;
    }

    // Check if email is valid
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: error.html?message=Invalid email format.");
        exit;
    }

    // SMTP Configuration
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'mail.bayfordsuites.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'booking@bayfordsuites.com';
    $mail->Password = '(&JikvzFy5~=+@3o';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    // $mail->isSMTP();
    // $mail->Host = 'smtp.booking@Trend's place Hotel & Suites.com';  // SMTP host
    // $mail->SMTPAuth = true;
    // $mail->Username = 'booking@Trend's place Hotel & Suites.com'; // SMTP username
    // $mail->Password = 'GLL.pk]]CQQ6'; // SMTP password
    // $mail->SMTPSecure = 'ssl'; // Enable TLS encryption, 'ssl' also accepted
    // $mail->Port = 465; // TCP port to connect to

    // Set the recipient email address
    $to1 = "info@bayfordsuites.com"; // Replace with your email

    // Set the email subject
    $subject = "Message from $name";

    // Customized Email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Message:\n$message\n";

    // Email headers
    $mail->setFrom($email, $name);
    $mail->addAddress($to1);
    $mail->Subject = $subject;
    $mail->Body = $email_content;

    // Send email
    if ($mail->send()) {
        // Redirect back with success message
        header("Location: success.html?message=Email sent successfully.");
        exit;
    } else {
        // Redirect back with error message
        header("Location: error.html?message=Error sending email: " . $mail->ErrorInfo);
        exit;
    }
} else {
    // If form not submitted, redirect back to form
    header("Location: error.html?message=Method not allowed.");
    exit;
}
?>