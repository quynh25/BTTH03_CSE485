<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

class MyEmailServer implements EmailServerInterface {
    public function sendEmail($to, $subject, $message) {
     $mail = new PHPMailer(true);
     try {
         // Server settings
         $mail->SMTPDebug            = 0;                            //Enable verbose debug output
         $mail->isSMTP();                                            // Set mailer to use SMTP
         $mail->Host                 = 'smtp.gmail.com';             // Specify main and backup SMTP servers
         $mail->SMTPAuth             = true;                         // Enable SMTP authentication
         $mail->Username             = 'ttquynh25052002@gmail.com';                 // SMTP username
         $mail->Password             = 'ubcppxrkwffusqht';                  // SMTP password
         $mail->SMTPSecure           = 'tls';                        // Enable TLS encryption, ssl also accepted
         $mail->Port                 = 587;                          // TCP port to connect to
         $mail->CharSet              = "UTF-8";    

         
         $mail->setFrom('ttquynh25052002@gmail.com', 'Trần thị Quỳnh');
         $mail->addAddress($to, '');
         $mail->isHTML(true);
         $mail->Subject = $subject;
         $bodyContent = $message;
         $mail->Body = $bodyContent;

         // Send email
         $mail->send();
         echo '<p style="color:green;">Gửi Email thành công!</p>';
     } catch (Exception $e) {
         echo '<p style="color:red;">Gửi Email không thành công!</p>';
     }
     

 }
}
// $emailServer = new MyEmailServer();
// $emailSender = new EmailSender($emailServer);
// $emailSender->send("ttquynh25052002@gmail.com", "Điểm danh môn công nghệ Web", "ngày 8/3/2023");


