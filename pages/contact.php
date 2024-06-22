<?php
// Verifique se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conexão com o banco de dados (substitua com suas próprias credenciais)
       // Caminho absoluto para o arquivo conexao.php
       $include_path = __DIR__ . '/../BD/conexao.php';

       // Inclui o arquivo conexao.php
       include_once($include_path);
   

    // Captura os dados do formulário
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Insere os dados no banco de dados
    $sql = "INSERT INTO messages (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";
    if ($conn->query($sql) !== true) {
        echo "Erro ao inserir no banco de dados: " . $conn->error;
    }

    // Envia o e-mail
    $to = "softgamebr4@gmail.com";
    $headers = "From: $email";
    $email_subject = "Novo contato: $subject";
    $email_body = "Nome: $name\nE-mail: $email\nMensagem:\n$message";

    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "Mensagem enviada com sucesso.";
    } else {
        echo "Erro ao enviar a mensagem.";
    }

    $conn->close();
}

if (function_exists('mail')) {
    echo "A função mail() está habilitada.";
} else {
    echo "A função mail() não está habilitada.";
}

?>
