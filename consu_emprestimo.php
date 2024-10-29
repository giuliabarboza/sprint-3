<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Empréstimo</title>
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
                <th>ID Empréstimo</th>
                <th>ID Cliente</th>
                <th>ID Usuário</th>
                <th>ISBN</th>
                <th>Data Empréstimo</th>
                <th>Data Devolução</th>
            </tr>
            <tbody>
                <?php
                include "conexao.php";

                $sql = "SELECT * FROM emprestimo";

                $dados = mysqli_query($con, $sql);

                while ($linha = mysqli_fetch_array($dados)) {
                    $id_emprestimo = $linha['id_emprestimo'];
                    $id_cliente = $linha['id_cliente'];
                    $id_usuario = $linha['id_usuario'];
                    $isbn = $linha['isbn'];
                    $data_emprestimo = $linha['data_emprestimo'];
                    $data_devolucao = $linha['data_devolucao'];

                    echo "<tr>
                        <td>$id_emprestimo</td>
                        <td> $id_cliente</td>
                        <td>$id_usuario</td>
                        <td>$isbn</td>
                        <td>$data_emprestimo</td>
                        <td>$data_devolucao</td>
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