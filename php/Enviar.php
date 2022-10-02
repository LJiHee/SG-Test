<?php

if (isset($_POST['email']) && !empty($_POST['email'])) {

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $mensagem = addslashes($_POST['message']);

    $to = "smartglovesg@gmail.com";
    $subject = "Contato - Smart Glove";
    $body = "Nome: " . $nome . "/r/n" .
        "Email: " . $email . "/r/n" .
        "Mensagem: " . $mensagem;
    $header = "From: " . "/r/n" .
        "Reply-To: " . $email . "./e/n" .
        "X=Mailer:PHP/" . phpversion();

    if (mail($to, $subject, $body, $header)) {
        echo ("Email enviado com sucesso");
    } else {
        echo ("O Email não pode ser enviado");
    }
}
