<?php

namespace App\Traits;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Illuminate\Support\Facades\Http;

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

            // Enviar SMS
            $response = Http::withHeaders([
                'Accept' => 'application/json',
                'Account' => env('HABLAME_ACCOUNT'),
                'ApiKey' => env('HABLAME_APIKEY'),
                'Content-Type' => 'application/json',
                'Token' => env('HABLAME_TOKEN'),
            ])->post('https://api103.hablame.co/api/sms/v3/send/priority', [
                'toNumber' => '57' . auth()->user()->celular,
                'sms' => '🎉 Felicidades ' . auth()->user()->name . '. Has sido el ganador del ' . $premio->descripcion . '. Tu premio será enviado 🚀 al PEC que has seleccionado. ¡Esperamos que disfrutes tu premio!',
                'flash' => '0',
                'sc' => '890202',
                'request_dlvr_rcpt' => '0'
            ]);

            if ($response->failed()) {
                throw new Exception('Error al enviar el SMS: ' . $response->body());
            }

        } catch (Exception $e) {
            return redirect()->back()->withErrors("Error: {$mail->ErrorInfo}")->withInput();
        }
    }
}