<?php

namespace Controllers;

use Http\Request;
use Http\Response;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class MailController
{
    public function sendEmail(Request $request)
    {
        $mail = new PHPMailer();
        $mail->isSMTP();

        $mail->Host = get_env('MAIL_HOST');
        $mail->SMTPAuth = true;
        $mail->Username = get_env('MAIL_USERNAME');
        $mail->Password = get_env('MAIL_PASSWORD');
        $mail->SMTPSecure = get_env('MAIL_ENCRYPTION');
        $mail->Port = get_env('MAIL_PORT');

        $mail->setFrom(get_env('MAIL_FROM_ADDRESS'), get_env('MAIL_FROM_NAME'));
        $mail->addAddress(get_env('MAIL_TO_ADDRESS'));
        $mail->addReplyTo($request->body['email'], $request->body['name']);
        $mail->Subject = "New message from {$request->body['name']}( {$request->body['email']} )";
        $mail->Body = $request->body['message'];

        if ($mail->send()) {
            $response = new Response(200, 'OK', [], 'Email sent successfully.');
            $response->send();
            return;
        }
        $response = new Response(500, 'Internal Server Error', [], 'Email could not be sent.');
        $response->send();
    }
}