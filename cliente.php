<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome_cliente = $_POST['nome_cliente'];
    $email_cliente = $_POST['email_cliente'];
    $tel_cliente = $_POST['tel_cliente'];
    $data_cliente = $_POST['data_cliente'];
    $endereco_cliente = $_POST['endereco_cliente'];
    $cpf_cliente = $_POST['cpf_cliente'];

    echo "<h1>Dados do Cliente:</h1>";
    echo "Nome: ", $nome_cliente, "<br>";
    echo "data de nascimento: ", $data_cliente, "<br>";
    echo "telefone: ", $tel_cliente, "<br>";
    echo "email: ", $email_cliente, "<br>";
    echo "cpf: ", $cpf_cliente, "<br>";
    echo "endereco: ", $endereco_cliente, "<br>";
} else {
    echo "Método de envio inválido.";
}

include "conexao.php";

$sql = "INSERT INTO `clientes`(`nome_cliente`, `email_cliente`, `tel_cliente`, `data_cliente`, `endereco_cliente`, `cpf_cliente`) VALUES ('$nome_cliente', '$email_cliente', '$tel_cliente', '$data_cliente', '$endereco_cliente', '$cpf_cliente')";
if (mysqli_query($con, $sql)) {
    echo "<br>Cliente Cadastrado com sucesso!";
    echo "<br> <a href='index.html'>Voltar</a>";
} else {
    echo "Erro no Cadastro";
}
