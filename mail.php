<?php
// Load Composer's autoloader (only if you installed PHPMailer via Composer)
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Create an instance of PHPMailer
$mail = new PHPMailer(true);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    try {
        //Server settings
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     // Set the SMTP server to send through (use your SMTP server)
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'kumeshkumar2000@gmail.com';               // SMTP username (your email)
        $mail->Password   = 'Umesh@12345';                  // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption
        $mail->Port       = 587;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom('kumeshkumar2000@gmail.com', 'Umesh Kumar');      // Set the sender of the email
        $mail->addAddress($email, $name);                          // Add a recipient (form user's email)

        // Content
        $mail->isHTML(true);                                        // Set email format to HTML
        $mail->Subject = 'User Data Submission';
        $mail->Body    = "
            <h2>User Data Collection</h2>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>age:</strong> $age</p>
        ";

        // Send email
        $mail->send();
        echo 'Message has been sent successfully';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>