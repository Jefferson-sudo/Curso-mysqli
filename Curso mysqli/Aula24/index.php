<!DOCTYPE html>
<html lang="pt-br">
    <!--Codigos das aulas 24 e 25-->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Usando while para mostrar dados da tabela na tela</title>
    </head>
    <body>
        <h1>Estudando mysqli_affected_rows</h1>
        <?php
        //Fazendo a conexão

        $host = "localhost";
        $user = "root";
        $password = "";
        $database = "curso_mysqli";

        $conexao = mysqli_connect($host, $user, $password, $database) or die("Não foi possivel fazer conexão com o Banco de Dados"); //Faz conexao



        $sql = "UPDATE `cliente` SET `fone`='99999999' WHERE fone='' "; //Update 
        $qry = mysqli_query($conexao, $sql); //Busca no banco de dados
        echo"Foram atualizados " . mysqli_affected_rows($conexao);


        //Utilizando while para mostrar os dados em uma tabela 
        $sqlSelect = "SELECT * FROM `cliente`"; //Sql para mostrar dados de cliente
        $qrySelect = mysqli_query($conexao, $sqlSelect); //Query do select
        
        echo"<table border=1>"
        . "<tr>"
        . "<td>Nome     </td>"
        . "<td>Email    </td>"
        . "<td>Telefone </td>"
        . "</tr>";

        while ($linha = mysqli_fetch_array($qrySelect)) {
            echo"<tr>"
            . "<td>" . $linha["cliente"] . "</td>"
            . "<td>" . $linha["email"] . "</td>"
            . "<td>" . $linha["fone"] . "</td>"
            . "</tr>";
        }
        ?>
    </body>
</html>