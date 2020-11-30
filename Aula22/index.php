<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Usando while para mostrar dados da tabela na tela</title>
    </head>
    <body>
        <?php
//Fazendo a conexão
        $host = "localhost";
        $user = "root";
        $password = "";
        $database = "curso_mysqli";

        $conexao = mysqli_connect($host, $user, $password, $database) or die("Não foi possivel fazer conexão com o Banco de Dados"); //Faz conexao

        $sql = "SELECT * FROM `cliente`"; //Comando sql que busca todos os dados da tabela cliente
        $qry = mysqli_query($conexao, $sql); //Busca no banco de dados

        echo"Total de registros " . mysqli_num_rows($qry) . "</br>"; //Mostra o numeros de registros
        ?>
        </br>
        <?php
        echo"<table border=1>"
        . "<tr>"
        . "<td>Nome     </td>"
        . "<td>Email    </td>"
        . "<td>Telefone </td>"
        . "</tr>";

        while ($linha = \mysqli_fetch_array($qry)) {
            echo"<tr>"
            . "<td>" . $linha["cliente"] . "</td>"
            . "<td>" . $linha["email"] . "</td>"
            . "<td>" . $linha["fone"] . "</td>"
            . "</tr>";
        }
        ?>
    </body>
</html>