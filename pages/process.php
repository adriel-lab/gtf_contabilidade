<?php
// Configurações do banco de dados
// Caminho absoluto para o arquivo conexao.php
$include_path = __DIR__ . '/../BD/conexao.php';

// Inclui o arquivo conexao.php
include_once($include_path);

// Processar o formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];

    // Inserir o e-mail no banco de dados
    $sql = "INSERT INTO subscribers (email) VALUES ('$email')";

    if ($conn->query($sql) === TRUE) {
        // Exibir o alerta com JavaScript antes do redirecionamento
        echo '<div class="alert alert-success">Inscrição realizada com sucesso!</div>';
        echo '<script>
            alert("Inscrição realizada com sucesso!");
            window.location.href = "../index.php"; // Substitua com a URL de redirecionamento desejada
        </script>';
    } else {
        header("Location: ../index.php?success=0");
        exit(); // Importante: Encerrar a execução após o redirecionamento
    }
}



// Fechar a conexão com o banco de dados
$conn->close();
