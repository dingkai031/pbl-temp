<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';
/* Send error to Fetch API, if unexpected content type */
if ($contentType !== "application/json")
    die(json_encode([
        'value' => 0,
        'error' => 'Content-Type is not set as "application/json"',
        'data' => null,
    ]));

include_once(realpath(dirname(__DIR__)."/vendor/autoload.php"));

$content = trim(file_get_contents("php://input"));
$decoded = json_decode($content, true);
$decoded_escaped = escapeNestedArray($decoded);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_OFF;                      //Enable verbose debug output
    $mail->isSMTP();                                         //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = EMAIL_CREDENTIALS['email'];                     //SMTP username
    $mail->Password   = EMAIL_CREDENTIALS['password'];                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
    //Recipients
    $mail->addAddress('yovanjulioadam@gmail.com'); //Add a recipient
    $mail->setFrom($decoded_escaped['email'], $decoded_escaped['name']);     
    // $mail->addAddress('ellen@example.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Bantuan Dukungan PBL-Tracer';
    $mail->Body    = "
        <h1>Pesan dari {$decoded_escaped['name']}</h1>
        <p>Email : {$decoded_escaped['email']}</p>
        <p>Pesan : {$decoded_escaped['message']}</p>
    ";
    $mail->AltBody = $decoded_escaped['name']."\n".$decoded_escaped['email']."\n".$decoded_escaped['message'];

    $mail->send();
    die(json_encode(['status' => "success", "message" => "Email terkirim ke ".EMAIL_CREDENTIALS['email']]));
} catch (Exception $e) {
    die(json_encode(['status' => "failed", "message" => $mail->ErrorInfo]));
}

?>