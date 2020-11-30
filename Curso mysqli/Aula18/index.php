<!DOCTYPE html>
<html lang="pt-br">
    <!--Codigos aula 18 e 19-->
    <head>
        <style>
            p{
                color:#222;
                font-family: ubuntu;
                font-size: 20pt;
            }
        </style>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Conhecendo mysqli_fetch_all</title>
    </head>
    <body>
        <p>Diferente do mysqli_fetch_array que retorna somente um valor o mysqli_fecth_all retorna todos os valores</br>
            e possui a mesma sintaxe.
        </p>
        <pre>
            <?php
            $host = "localhost";
            $user = "root";
            $password = "";
            $database = "curso_mysqli";

            $conexao = mysqli_connect($host, $user, $password, $database); //Faz conexao

            $qry = "SELECT * FROM `cliente`";

            $result = mysqli_query($conexao, $qry); //$result recebe o resultado da execucao dos comando da qry
            $resultSelect = mysqli_fetch_all($result); //receber os dados de $result e coloca no array $resultSelect 

            $todos = mysqli_fetch_all(mysqli_query($conexao, $qry), MYSQLI_ASSOC);
            $associativo = mysqli_fetch_array(mysqli_query($conexao, $qry), MYSQLI_ASSOC);
            ?>
            <h1>Informações buscadas no banco na tabela cliente</h1></br>Nome:<?php echo $todos[1]["cliente"]; ?></br><?php echo $todos[1]["endereco"] ?>
            </br>
            <hr></br>Nome:<?php echo $todos[3]["cliente"]; ?></br>Endereco:<?php echo $todos[3]["endereco"]; ?></br>

            <h4>mysqli_fetch_array</h4>
            <?php print_r($associativo); ?>
            <hr></br>
            <h4>Associativo mysqli_fetch_all</h4>
            <?php print_r($todos); ?>
            </hr>
            <h1>Imprimindo variavel $resultSelect</h1>
            <?php echo"<pre>"; print_r($resultSelect);echo"</pre>"; ?>

        </pre>
    </body>
</html>