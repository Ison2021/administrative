<?php
include('../conn/conn.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

if (isset($_POST['register'])) {
    try {
        $firstName = $_POST['first_name'];
        $lastName = $_POST['last_name'];
        $contactNumber = $_POST['contact_number'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $conn->beginTransaction();
    
        $stmt = $conn->prepare("SELECT `first_name`, `last_name` FROM `tbl_user` WHERE `first_name` = :first_name AND `last_name` = :last_name");
        $stmt->execute([
            'first_name' => $firstName,
            'last_name' => $lastName
        ]);
        $nameExist = $stmt->fetch(PDO::FETCH_ASSOC);
    
        if (empty($nameExist)) {
            $verificationCode = rand(100000, 999999);
    
            $insertStmt = $conn->prepare("INSERT INTO `tbl_user` (`tbl_user_id`, `first_name`, `last_name`, `contact_number`, `email`, `username`, `password`, `verification_code`) VALUES (NULL, :first_name, :last_name, :contact_number, :email, :username, md5(:password), :verification_code)");
            $insertStmt->bindParam(':first_name', $firstName, PDO::PARAM_STR);
            $insertStmt->bindParam(':last_name', $lastName, PDO::PARAM_STR);
            $insertStmt->bindParam(':contact_number', $contactNumber, PDO::PARAM_INT);
            $insertStmt->bindParam(':email', $email, PDO::PARAM_STR);
            $insertStmt->bindParam(':username', $username, PDO::PARAM_STR);
            $insertStmt->bindParam(':password', $password, PDO::PARAM_STR);
            $insertStmt->bindParam(':verification_code', $verificationCode, PDO::PARAM_INT);
            $insertStmt->execute();
    
            //Server settings
            $mail->isSMTP(); 
            $mail->Host       = 'smtp.gmail.com'; 
            $mail->SMTPAuth   = true; 
            $mail->Username   = 'lorem.ipsum.sample.email@gmail.com';
            $mail->Password   = 'novtycchbrhfyddx';
            $mail->SMTPSecure = 'ssl';
            $mail->Port       = 465;                                    
        
            //Recipients
            $mail->setFrom('lorem.ipsum.sample.email@gmail.com', 'Lorem Ipsum');
            $mail->addAddress($email);   
            $mail->addReplyTo('lorem.ipsum.sample.email@gmail.com', 'Lorem Ipsum'); 
        
            //Content
            $mail->isHTML(true);  
            $mail->Subject = 'Verification Code';
            $mail->Body    = 'Your verification code is: ' . $verificationCode; 
            
            // Success sent message alert
            $mail->send();
            
            session_start();
    
            $userVerificationID = $conn->lastInsertId();
            $_SESSION['user_verification_id'] = $userVerificationID;

            echo "
            <script>
                window.location.href = 'http://localhost/ams/verification.php';
            </script>
            ";

            $conn->commit();
        } else {
            echo "
            <script>
                alert('User Already Exists');
                window.location.href = 'http://localhost/ams/index.php';
            </script>
            ";
        }
    } catch (PDOException $e) {
        $conn->rollBack();
        echo "Error: " . $e->getMessage();
    }
}

if (isset($_POST['verify'])) {

    try {
        $userVerificationID = $_POST['user_verification_id'];
        $verificationCode = $_POST['verification_code'];
    
        $stmt = $conn->prepare("SELECT `verification_code` FROM `tbl_user` WHERE `tbl_user_id` = :user_verification_id");
        $stmt->execute([
            'user_verification_id' => $userVerificationID,
        ]);
        $codeExist = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($codeExist && $codeExist['verification_code'] == $verificationCode) {
            session_destroy();
            echo "
            <script>
                alert('Registered Successfully.');
                window.location.href = 'http://localhost/ams/index.php';
            </script>
            ";
        } else {
            $conn->prepare("DELETE FROM `tbl_user` WHERE `tbl_user_id` = :user_verification_id")->execute([
                'user_verification_id' => $userVerificationID
            ]);

            echo "
            <script>
                alert('Incorrect Verification Code.');
                window.location.href = 'http://localhost/ams/index.php';
            </script>
            ";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
