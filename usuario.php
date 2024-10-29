<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome_usuario = $_POST['nome_usuario'];
    $data_usuario = $_POST['data_usuario'];
    $tel_usuario = $_POST['tel_usuario'];
    $email_usuario = $_POST['email_usuario'];
    $cpf_usuario = $_POST['cpf_usuario'];
    $endereco_usuario = $_POST['endereco_usuario'];

    echo "<h1>Dados do Usuário:</h1>";
    echo "Nome: " , $nome_usuario , "<br>";
    echo "data de nascimento: " , $data_usuario , "<br>";
    echo "telefone: " , $tel_usuario , "<br>";
    echo "email: " ,$email_usuario , "<br>";
    echo "cpf: " , $cpf_usuario , "<br>";
    echo "endereco: " , $endereco_usuario ,"<br>";
} else {
    echo "Método de envio inválido.";
}

include "conexao.php";

$sql = "INSERT INTO `usuario`(`nome_usuario`, `data_usuario`, `tel_usuario`, `email_usuario`,`cpf_usuario`, `endereco_usuario`) VALUES ('$nome_usuario', '$data_usuario', '$tel_usuario',  '$email_usuario', '$cpf_usuario', '$endereco_usuario')";
if (mysqli_query($con, $sql)) {
    echo "<br> Usuário Cadastrado com sucesso!";
    echo "<br> <a href='index.html'>Voltar</a>";
} else {
    echo "Erro no Cadastro";
}

mysqli_close($con);
?>
