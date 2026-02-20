<?php
session_start();
ob_start();
error_reporting(E_ALL);

// Include PHPMailer

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    try {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $payment = $_POST['payment'];
        $checkin = $_POST['checkin'];
        $checkout = $_POST['checkout'];
        $guests = $_POST['guests'];
        $room = $_POST['room'];
        $nofroom = $_POST['nofroom'];
        $message = $_POST['message'];
        $pricePerNight = isset($_POST['pricePerNight']) ? intval($_POST['pricePerNight']) : 0;

        // Convert the date format from 'Y-m-d' (HTML input date) or 'm/d/Y' (HTML input text) to 'Y-m-d H:i:s'
        // If it's already Y-m-d, createFromFormat might expect exactly that format.
        // Let's be lenient:
        $checkinDateTime = DateTime::createFromFormat('Y-m-d', $checkin) ?: DateTime::createFromFormat('m/d/Y', $checkin);
        $checkoutDateTime = DateTime::createFromFormat('Y-m-d', $checkout) ?: DateTime::createFromFormat('m/d/Y', $checkout);

        if (!$checkinDateTime || !$checkoutDateTime) {
            throw new Exception("Invalid date format");
        }

        $checkinFormatted = $checkinDateTime->format('Y-m-d');
        $checkoutFormatted = $checkoutDateTime->format('Y-m-d');

        $interval = $checkinDateTime->diff($checkoutDateTime);
        $days = $interval->days;
        $totalPrice = $days * $pricePerNight;


        // $stmt = $con->prepare("INSERT INTO bookings (name, email, phone, payment, checkin, checkout, guests, room, message, total_price) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        // $stmt->execute([$name, $email, $phone, $payment, $checkinFormatted, $checkoutFormatted, $guests, $room, $message, $totalPrice]);


        // Email to Client
        $mailClient = new PHPMailer(true);
        try {
            $mailClient->isSMTP();
            $mailClient->Host = 'mail.bayfordsuites.com';
            $mailClient->SMTPAuth = true;
            $mailClient->Username = 'booking@bayfordsuites.com';
            $mailClient->Password = '(&JikvzFy5~=+@3o';
            $mailClient->SMTPSecure = 'ssl';
            $mailClient->Port = 465;


            // $mailClient->isSMTP();
            // $mailClient->Host = 'smtp.mailtrap.io';  // SMTP host
            // $mailClient->SMTPAuth = true;
            // $mailClient->Username = 'c37ef4508c01e6'; // SMTP username
            // $mailClient->Password = '25db67cf9f349e'; // SMTP password
            // $mailClient->SMTPSecure = 'tls'; // Enable TLS encryption, 'ssl' also accepted
            // $mailClient->Port = 2525; // TCP port to connect to

            $mailClient->setFrom('bookingfo@bayfordsuites.com', 'Bayford Suites');
            $mailClient->addAddress($email, $name);
            $mailClient->Subject = 'Booking Confirmation';
            $mailClient->isHTML(true);

            $clientEmailContent = "
    <html>
     <body style='padding: 20px; margin: 10px;'>
        <h3>Booking Confirmation</h3>
        <p>Dear $name,</p>
        <p>Thank you for booking with us. Here are your details:</p>
        <p><strong>Room:</strong> $room</p>
        <p><strong>Check-in:</strong> $checkinFormatted</p>
        <p><strong>Check-out:</strong> $checkoutFormatted</p>
        <p><strong>Guests:</strong> $guests</p>
         <p><strong>Number of Days:</strong> $days</p>
          <p><strong>Number of Room:</strong> $nofroom</p>
         
        <p><strong>Nightly Rate:</strong> &#x20A6;$pricePerNight</p> 
        <p><strong>Total Price:</strong> &#x20A6;$totalPrice</p> 
      
        <p>We look forward to hosting you!</p>
       <p>
  Regards,<br>
  Bayford Suites<br>
  Call: 08060425569<br>
 
</p>

    </body>
    </html>";

            $mailClient->Body = $clientEmailContent;
            $mailClient->send();
        } catch (Exception $e) {
            echo 'Error sending client email: ', $mailClient->ErrorInfo;
        }

        // Email to Admin
        $mailAdmin = new PHPMailer(true);
        try {
            $mailClient->isSMTP();
            $mailClient->Host = 'mail.bayfordsuites.com';
            $mailClient->SMTPAuth = true;
            $mailClient->Username = 'booking@bayfordsuites.com';
            $mailClient->Password = '(&JikvzFy5~=+@3o';
            $mailClient->SMTPSecure = 'ssl';
            $mailClient->Port = 465;

            // $mailAdmin->isSMTP();
            // $mailAdmin->Host = 'smtp.mailtrap.io';  // SMTP host
            // $mailAdmin->SMTPAuth = true;
            // $mailAdmin->Username = 'c37ef4508c01e6'; // SMTP username
            // $mailAdmin->Password = '25db67cf9f349e'; // SMTP password
            // $mailAdmin->SMTPSecure = 'tls'; // Enable TLS encryption, 'ssl' also accepted
            // $mailAdmin->Port = 2525; // TCP port to connect to

            $mailAdmin->setFrom('booking@bayfordsuites.com', 'Bayford Suites');
            $mailAdmin->addAddress('info@bayfordsuites.com', 'Bayford Suites'); // Admin email
            $mailAdmin->Subject = 'New Booking Received';
            $mailAdmin->isHTML(true);

            $adminEmailContent = "
    <html>
     <body style='padding: 20px; margin: 10px;'>
        <h3>New Booking Alert</h3>
        <p>A new booking has been made:</p>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Phone:</strong> $phone</p>
        <p><strong>Room:</strong> $room</p>
        <p><strong>Check-in:</strong> $checkinFormatted</p>
        <p><strong>Check-out:</strong> $checkoutFormatted</p>
        <p><strong>Guests:</strong> $guests</p>
        <p><strong>Number of Days:</strong> $days</p>
        <p><strong>Number of Room:</strong> $nofroom</p>
        <p><strong>Nightly Rate:</strong> &#x20A6;$pricePerNight</p> 
        <p><strong>Total Price:</strong> &#x20A6;$totalPrice</p> 
      
       
    </body>
    </html>";

            $mailAdmin->Body = $adminEmailContent;
            $mailAdmin->send();


            header("Location: success.html?message=Booking successful.");
            exit;

        } catch (Exception $e) {
            echo 'Error sending admin email: ', $mailAdmin->ErrorInfo;
        }



    } catch (Exception $e) {
        $errorMsg = urlencode("Error: " . $e->getMessage());
        header("Location: error.html?message=" . $errorMsg);
        exit;
    }
}
?>