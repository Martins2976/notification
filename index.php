<?php

require __DIR__ . '/lib_ext/autoload.php';

use Notification\Email;

$novoEmail = new Email;
$novoEmail->sendMail(subject: "Assunto de Teste", body: "<p>Esse é um e-mail de <b>teste</b></p>", replayEmail: "martins_2976@yahoo.com.br", replayName: "Rogerio Web", addressEmail: "martins_2976@yahoo.com.br", addressName: "Rogerio");

var_dump($novoEmail);




































