<?php
// Configurações do banco de dados MySQL
$servername = "localhost";
$username = "id20852256_ahnert";
$password = "Pazdejah1.";
$dbname = "id20852256_usuarios";

// Conexão com o banco de dados MySQL
$mysqli = new mysqli($hostname, $username, $password, $database);

// Verifica se houve algum erro na conexão
if ($mysqli->connect_errno) {
    die('Falha na conexão com o banco de dados: ' . $mysqli->connect_error);
}

// Obtém os valores enviados pelo formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

// Insere os dados no banco de dados
$query = "INSERT INTO mensagens (nome, email, mensagem) VALUES ('$nome', '$email', '$mensagem')";

if ($mysqli->query($query)) {
    echo 'Mensagem enviada com sucesso!';
} else {
    echo 'Erro ao enviar a mensagem: ' . $mysqli->error;
}

// Fecha a conexão com o banco de dados
$mysqli->close();
?>
