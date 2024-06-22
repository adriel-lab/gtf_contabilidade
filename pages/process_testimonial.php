<?php
// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recupera os dados do formulário
    $name = $_POST['name'];
    $role = $_POST['role'];
    $testimonial = $_POST['testimonialText'];

    // Valide os dados aqui, se necessário
    // Caminho absoluto para o arquivo conexao.php
    $include_path = __DIR__ . '/../BD/conexao.php';

    // Inclui o arquivo conexao.php
    include_once($include_path);



    // Insere os dados na tabela de depoimentos
    $sql = "INSERT INTO testimonials (name, role, testimonial) VALUES ('$name', '$role', '$testimonial')";

    if ($conn->query($sql) === TRUE) {
        // Dados inseridos com sucesso
        echo '<script>';
    echo 'alert("Depoimento enviado com sucesso!");';
    echo 'window.location.href = "../index.php";'; // Redireciona para uma página de sucesso
    echo '</script>';
    } else {
        // Erro ao inserir os dados
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    // Redireciona se o formulário não foi enviado
    header("Location: ../index.php");
    exit();
}
