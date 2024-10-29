<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_usuario = $_POST['id_usuario'];
    $id_cliente = $_POST['id_cliente'];
    $isbn = $_POST['ISBN'];
    $data_emprestimo = $_POST['data_emprestimo'];
    $data_devolucao = $_POST['data_devolucao'];
} else {
    echo "Método de envio inválido.";
}

include "conexao.php";

$sql = "INSERT INTO `emprestimo`(`id_cliente`, `id_usuario`, `ISBN`, `data_emprestimo`, `data_devolucao`) VALUES ('$id_cliente', '$id_usuario', '$isbn', '$data_emprestimo', '$data_devolucao')";
if (mysqli_query($con, $sql)) {
    echo "<br>Empréstimo feito com sucesso!";
    echo "<br> <a href='index.html'>Voltar</a>";
} else {
    echo "Erro no Cadastro";
}
?>