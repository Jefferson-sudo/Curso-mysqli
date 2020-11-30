<!DOCTYPE html>
<html lang="pt-br">
<!--Olá Devs-->
    <!--Codigos das aulas 24 e 25-->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Estudando  mysqli_error, mysqli_errnor, mysqli_connet_error e mysqli_connect_errnor</title>
    </head>
    <body>
        <?php
        //Conexao
        $host = "localhost";
        $user = "root";
        $password = "";
        $database = "curso_mysqli";

        $conexao = @mysqli_connect($host, $user, $password, $database); //Faz conexao

        $sql = "UPDATE `cliente` SET `fone1`='99999999' WHERE fone='' "; //Comando sql que busca todos os dados da tabela cliente
        $qry = @mysqli_query($conexao, $sql);                            //Busca no banco de dados

        if ($conexao == false) {
            echo"O seguinte erro aconteceu na conexao com o banco de dados: " . mysqli_connect_error() . " erro " . mysqli_connect_errno();
        }
        if ($qry == false) {
            echo"O seguinte erro aconteceu : ";
           var_dump(@mysqli_error($conexao));
           echo". Erro ";
           var_dump(@mysqli_errno($conexao));
        }
        ?>
    </body>
</html>
