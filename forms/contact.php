<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = "luizeduardocotta@gmail.com"; 
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    $body = "<h1>Nova Mensagem de Contato</h1>";
    $body .= "<p><strong>Nome:</strong> $name</p>";
    $body .= "<p><strong>E-mail:</strong> $email</p>";
    $body .= "<p><strong>Assunto:</strong> $subject</p>";
    $body .= "<p><strong>Mensagem:</strong></p><p>$message</p>";

    if (mail($to, $subject, $body, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Erro ao enviar a mensagem. Tente novamente.";
    }
}
?>

