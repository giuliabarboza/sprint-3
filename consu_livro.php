<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Usuário</title>
    <link rel="icon" href="Imagens/estrela.png">
    <link rel="stylesheet" href="consulta.css">
</head>

<body>
    <div class="div-cabecalho">
        <h1>Biblioteca Aurora</h1>
    </div>
    <br>

    <fieldset>
        <h1>Consulta</h1>
        <br>
        <table>
            <tr>
                <th>ISBN</th>
                <th>Titulo</th>
                <th>Autor</th>
                <th>Genero</th>
                <th>Nº Páginas</th>
                <th>Editora</th>
                <th>Idioma</th>
                <th>Quantidade</th>
                <th>Disponibilidade</th>
            </tr>
            <tbody>
                <?php
                include "conexao.php";

                $sql = "SELECT * FROM livros";

                $dados = mysqli_query($con, $sql);

                while ($linha = mysqli_fetch_array($dados)) {
                    $isbn = $linha['ISBN'];
                    $titulo = $linha['titulo'];
                    $autor = $linha['autor'];
                    $genero = $linha['genero'];
                    $num_paginas = $linha['num_paginas'];
                    $editora = $linha['editora'];
                    $idioma = $linha['idioma'];
                    $quantidade = $linha['quantidade'];
                    $disponibilidade = $linha['disponibilidade'];
                    if($quantidade>0){
                        $disponibilidade="sim";
                    }

                    echo "<tr>
                        <td>$isbn</td>
                        <td>$titulo</td>
                        <td>$autor</td>
                        <td>$genero</td>
                        <td>$num_paginas</td>
                        <td>$editora</td>
                        <td>$idioma</td>
                        <td>$quantidade</td>
                        <td>$disponibilidade</td>
                    </tr>
                ";
                }
                ?>
            </tbody>
        </table>
        <br><button><a href='index.html'>Voltar</a></button>
    </fieldset>

    <footer>
        <center>
            Copyright 2024 © - Desenvolvimento de Sistemas<br>Ourinhos - SP
        </center>
    </footer>


    <div vw class="enabled">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
            <div class="vw-plugin-top-wrapper"></div>
        </div>
    </div>
    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
    <script>
        new window.VLibras.Widget('https://vlibras.gov.br/app');
    </script>
</body>

</html>
