<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);
try {
    $mail->isSMTP();
    $mail->Host = 'smtp.mailtrap.io';
    $mail->SMTPAuth = true;
    $mail->Username = 'c37ef4508c01e6';
    $mail->Password = '25db67cf9f349e';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 2525;

    $mail->setFrom('lifeofrence@gmail.com', 'Bayford Suites Test');
    $mail->addAddress('lifeofrence@gmail.com');
    $mail->Subject = 'Test Email';
    $mail->Body = 'This is a test email.';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>