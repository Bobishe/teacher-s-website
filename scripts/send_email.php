<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../vendor/autoload.php';


//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

$email = $_POST['email'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$message = $_POST['message'];

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'crezy.zeka100@gmail.com';                     //SMTP username
    $mail->Password   = 'qvsnkzrsmtvosxuu';                               //SMTP password
    /*$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;   */         //Enable implicit TLS encryption
    $mail->SMTPSecure = 'ssl'; // Включение SSL (другие варианты: 'tls')
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('crezy.zeka100@gmail.com', 'Zenya');
    $mail->addAddress('zenya.oskolkov2001@gmail.com', $name);     //Add a recipient
    $mail->addAddress('zenya.oskolkov2001@gmail.com');               //Name is optional
    $mail->addReplyTo('zenya.oskolkov2001@gmail.com', 'Information');
    $mail->addCC('test@gmail.com');
    $mail->addBCC('test@gmail.com');

    //Attachments
    /*$mail->addAttachment('');         //Add attachments
    $mail->addAttachment('', '');    //Optional name*/

    //Content
    $mail->isHTML(true);                                      //Set email format to HTML
    $mail->Subject = 'Message from the client!';
    $mail->Body    = $message.' <br> Почта отправителя: '.$email.' <br> Номер телефона отправителя: '.$phone;
    $mail->AltBody = '';

    $mail->send();
    echo 'Message has been sent';
    session_start();
    $_SESSION['email'] = 1;
    header('Location: ../index.php');
    exit();
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}