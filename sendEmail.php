<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

header('Content-Type: application/json');

// Increase the maximum execution time
set_time_limit(300);

// Load Composer's autoloader if you're using Composer
// require 'vendor/autoload.php';

// If you're not using Composer, require the PHPMailer class directly
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/Exception.php';
require './PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {
    $data = json_decode(file_get_contents('php://input'), true); 
    $email = $data['email'];
    $orderId = $data['orderId'];
    $shippingAmount = $data['shippingAmount'];
    $subject = "Order Confirmation {$orderId}";
    
    $paypalLink = "https://paypal.me/teflonbonehornparts/{$shippingAmount}?country.x=IN&locale.x=en_GB";
    $message = "<h2>Order Confirmation/Shipping Amount</h2><br><h4>To confirm {$orderId} pay Shipping Amount.</h4><br><h3> Your Order Shipping Amount is ${$shippingAmount} click on below Link to Pay.<h3><br>{$paypalLink}";

    // Server settings
    $mail = new PHPMailer(true);
    $mail->SMTPDebug = 2;
    $mail->isSMTP();
    $mail->Host = 'smtpout.secureserver.net';
    $mail->SMTPAuth = true;
    $mail->Username = 'info@teflonbonehorncrafts.com';
    $mail->Password = 'Shakulat@123';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    
    // Recipients
    $mail->setFrom('info@teflonbonehorncrafts.com', 'As International');
    $mail->addAddress($email);

    // Content
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $message;
    $mail->AltBody = 'Body in plain text for non-HTML mail clients';
    $mail->send();
 
    echo json_encode(['message' => 'Message has been sent']);
} catch (Exception $e) {
    echo json_encode(['message' => 'Mailer Error: ' . $mail->ErrorInfo]);
}
?>
