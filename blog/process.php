<?php
// Iniciar a sessão
session_start();
// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Recuperar dados do formulário
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validação básica
    if (empty($email) || empty($password)) {
        echo "Preencha todos os campos do formulário.";
    } else {
        // Conectar ao banco de dados (substitua pelos seus detalhes de conexão)
        include 'conexao.php';

        // Verificar a conexão
        if ($conn->connect_error) {
            die("Erro de conexão com o banco de dados: " . $conn->connect_error);
        }

        // Consulta SQL para verificar o login
        $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$password'";
        $result = $conn->query($sql);

        // Verificar se o login foi bem-sucedido
        if ($result->num_rows > 0) {
           // Obter o nome do usuário
           $row = $result->fetch_assoc();
           $nome_usuario = $row['nome_usuario'];
           $work = $row['work'];

           // Iniciar a sessão e armazenar o nome do usuário
           session_start();
           $_SESSION['nome_usuario'] = $nome_usuario;
           $_SESSION['work'] = $work;
           header("Location: painel.php");
        
            exit();
        } else {
            // Login falhou
            echo "Email ou senha incorretos. Tente novamente.";
        }

        // Fechar a conexão com o banco de dados
        $conn->close();
    }
} else {
    // Redirecionar se o formulário não foi enviado via POST
    header("Location: index.php");
    exit();
}
