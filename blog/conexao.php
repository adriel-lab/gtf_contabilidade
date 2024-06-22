<?php
//conexão com banco de dados
define("SERVIDOR","gtfcontabil.mysql.dbaas.com.br");
define("USUARIO","gtfcontabil");
define("SENHA","GTFcont102040@");
define("BANCO","gtfcontabil");


// Estabelece a conexão com o banco de dados
$conn = mysqli_connect(SERVIDOR, USUARIO, SENHA, BANCO) or die("Erro na conexão com o banco de dados" . mysqli_connect_error());

// Define a codificação UTF-8 para a conexão
mysqli_set_charset($conn, "utf8mb4");

// Agora a conexão está configurada com a codificação UTF-8
?>


