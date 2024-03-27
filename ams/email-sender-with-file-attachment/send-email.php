<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/phpmailer/src/PHPMailer.php';
require __DIR__ . '/phpmailer/src/Exception.php';
require __DIR__ . '/phpmailer/src/SMTP.php';

if (isset($_POST['email'], $_POST['subject'], $_POST['message'], $_FILES['file'])) {

    $mail = new PHPMailer(true);

    try {

        // Server Settings
        $mail->isSMTP();
        $mail->Host         = 'smtp.gmail.com';
        $mail->SMTPAuth     = true;
        $mail->Username     = 'gerald.ison02@gmail.com';
        $mail->Password     = 'hnnq jzdd ohny tmpa';
        $mail->SMTPSecure   = 'tls';
        $mail->Port         = 587;

        // Recipient
        $mail->setFrom('gerald.ison02@gmail.com', 'recca');
        $mail->addAddress($_POST['email']);
        $mail->addReplyTo('gerald.ison02@gmail.com', 'recca');

        // Content
        $mail->isHTML(true);
        $mail->Subject = $_POST['subject'];
        $mail->Body    = $_POST['message'];

        // Attachment
        $file_path = $_FILES['file']['tmp_name'];
        $file_name = $_FILES['file']['name'];
        $mail->addAttachment($file_path, $file_name);

        // Success Sent Email
        $mail->send();
        echo "
        <script>
            alert('Email sent successfully!');
            document.location.href = 'index.php';
        </script>
        ";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    echo "
    <script>
        alert('Fill all the inputs!');
        document.location.href = 'index.php';
    </script>
    ";
}

?>
