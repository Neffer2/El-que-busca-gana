<?php

namespace App\Traits;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

trait Mail
{
    public function mailPremio($premio){
        require base_path("vendor/autoload.php");
        $mail = new PHPMailer(true);     // Passing `true` enables exceptions

        try{
            //Server settings
            // $mail->SMTPDebug = true;
            $mail->isSMTP();
            $mail->Host       = env('MAIL_HOST');
            $mail->SMTPAuth   = true;
            $mail->Username   = env('MAIL_USERNAME');
            $mail->Password   = env('MAIL_PASSWORD');
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port       = env('MAIL_PORT', 587);

            //Recipients
            $mail->setFrom(env('MAIL_USERNAME'), 'Gana Como Loco');
            $mail->addAddress(auth()->user()->email, auth()->user()->name);

            $mail->addAttachment("assets/Mailing/{$premio->mail}", "Descrubre tu premio.jpg");

            //Content
            $mail->isHTML(true);
            $mail->CharSet = 'UTF-8';
            $mail->Subject = "¡Tenemos noticias sobre tu premio!";
            $mail->Body    = view('mails.premio', ['premio' => $premio, 'user' => auth()->user()]);
            $mail->AltBody = "¡Felicidades, haz ganado!";

            $mail->send();
        } catch (Exception $e) {
            return redirect()->back()->withErrors("Error: {$mail->ErrorInfo}")->withInput();
        }
    }
}
