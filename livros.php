<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $isbn = $_POST['ISBN'];
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $genero = $_POST['genero'];
    $num_paginas= $_POST['num_paginas'];
    $editora = $_POST['editora'];
    $idioma = $_POST['idioma'];
    $quantidade = $_POST['quantidade'];

    echo "<h1>Dados do Livro:</h1>";
    echo "ISBN: " , $isbn, "<br>";
    echo "Título: " , $titulo, "<br>";
    echo "Autor: " , $autor, "<br>";
    echo "Genero: " ,$genero  , "<br>";
    echo "Nº páginas: " , $num_paginas , "<br>";
    echo "editora: " , $editora ,"<br>";
    echo "idioma: " , $idioma ,"<br>";
    echo "quantidade: " , $quantidade, "<br>";
} else {
    echo "Método de envio inválido.";
}

include "conexao.php";

$sql = "INSERT INTO `livros`(`ISBN`, `titulo`, `autor`, `genero`, `num_paginas`, `editora`, `idioma`, `quantidade`) VALUES ('$isbn', '$titulo', '$autor', '$genero', '$num_paginas', '$editora', '$idioma', '$quantidade')";
if (mysqli_query($con, $sql)) {
    echo "<br> Livro Cadastrado com sucesso!";
    echo "<br> <a href='index.html'>Voltar</a>";
} else {
    echo "Erro no Cadastro";
}