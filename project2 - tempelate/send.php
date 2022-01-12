<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;



 
 // Strip_tags to prevent from putting some injecting tags into inquery
 $name = strip_tags ($_POST['yourname']);
 $email = strip_tags ($_POST['youremail']);
 $message = strip_tags ($_POST['yourphonenumber']);

 //Validation

if(empty($name)){
     header('location: index.php?error=name');
     exit();
 }

 if(empty($email)){
     header('location: index.php?error=email');
     exit();
 }
 if(empty($message)){
    header('location: index.php?error=message');
    exit();
}

 //Load Composer's autoloader
 require_once 'vendor/autoload.php';

 $mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.sql308.epizy.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'epiz_30660625';                     //SMTP username
    $mail->Password   = 'k9iN4aL1xK';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 3306;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('kavuotashi.kovac@gmail.com', 'Mailer');
    $mail->addAddress('joe@example.net', 'Joe User');     //Add a recipient
    $mail->addAddress('ellen@example.com');               //Name is optional
    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');

    //Attachments
    $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set name format to HTML
    $mail->Subject = 'Web site enquriy form' . $name;
    $body = "Dear Admin, you have received an email from $name <br>
        The email is as follows:<br>

        name:$name<br>
        email: $email <br>
        message: $message
    ";
    $mail->Body    = $body;
    $mail->AltBody = strip_tags($body);

    $mail->send();
    echo 'email has been sent';
} catch (Exception $e) {
    echo "email could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>