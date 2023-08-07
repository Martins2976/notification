<?php

namespace Notification;

use http\Message\Body;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
class Email {
    private $Email = \stdClass::class;
    public function __construct()

    {
        $this->$Email = new PHPMailer(true);
        $this->$Email->SMTPDebug = 2; /*SMTP::DEBUG_SERVER;*/                      //Enable verbose debug output
        $this->$Email->isSMTP();                                            //Send using SMTP
        $this->$Email->Host       = 'mail.rogerioweb.me';                     //Set the SMTP server to send through
        $this->$Email->SMTPAuth   = true;                                   //Enable SMTP authentication
        $this->$Email->Username   = 'sender@rogerioweb.me';                     //SMTP username
        $this->$Email->Password   = 'teste@123 ';                              //SMTP password
        $this->$Email->SMTPSecure = 'tls';  /*PHPMailer::ENCRYPTION_SMTPS;*/            //Enable implicit TLS encryption
        $this->$Email->Port       = '465';                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        $this->$Email->CharSet = 'utf-8';
        $this->$Email->setLanguage('br');
        $this->$Email->isHTML(true);
        $this->$Email->setFrom('rogerio@rogerioweb.me', 'Equipe RogerioWeb');

    }
    public function sendMail($subject, $body, $replayEmail, $replayName, $addressEmail, $addressName  )
    {
        $this->mail->Subject = (string)$subject;
        $this->mail->Body = $body;

        $this->mail->addReplayTo($replayEmail, $replayName);
        $this->mail->addAddress($addressEmail, $addressName);

        try {
            $this->mail->send();
            }catch (\Exception $e){
            echo "Erro ao enviar o e-mail:{$this->mail->ErrorInfo} {$e->getMessage()}";

        }
    }
}