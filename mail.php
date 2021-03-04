<?php

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['user_name'];
$email = $_POST['user_email'];
$message = $_POST['user_message'];

//$mail->SMTPDebug = 3;                            

$mail->isSMTP();                                    
$mail->Host = 'smtp.mail.ru';  												
$mail->SMTPAuth = true;                           
$mail->Username = ''; // логин от почты с которой будут отправляться письма
$mail->Password = ''; //  пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                         
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('');        // от кого будет уходить письмо
$mail->addAddress('');     // Кому будет уходить письмо

$mail->isHTML(true);                                  

$mail->Subject = 'Заявка с сайта';
$mail->Body    = '' .$name . ' оставил заявку, его почта ' .$email. '<br>Его сообщение: ' .$message;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    header('location: thank-you.html');
}
?>
