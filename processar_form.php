<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    $para = 'alexandresouzaadvogado@gmail.com';
    $assunto = 'Formulário de Contato';
    $mensagem_email = "Nome: $nome\n";
    $mensagem_email .= "Email: $email\n";
    $mensagem_email .= "Mensagem:\n$mensagem\n";

    // Envia o email
    mail($para, $assunto, $mensagem_email);

    // Redireciona de volta para o formulário com uma mensagem de sucesso
    header('Location: form.html?enviado=sim');
    exit();
}
?>