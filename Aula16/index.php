<!DOCTYPE html>
<html lang="pt-br">
    <!--Codigos aula 16-->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Conhecendo mysqli fetch assoc</title>
    </head>
    <body>
        <h1>Busca no banco de dados</h1>
        <?php
        
        $host     = "localhost";
        $user     = "root";
        $password = "";
        $database = "curso_mysqli";
        
        $conexao = mysqli_connect($host, $user, $password, $database); //Faz conexao

        $qry = "SELECT * FROM `cliente`";

        $result = mysqli_query($conexao, $qry); //$result recebe o resultado da execucao dos comando da qry
        $resultSelect = mysqli_fetch_array($result); //receber os dados de $result e coloca no array $resultSelect 

        $associativo = mysqli_fetch_array(mysqli_query($conexao, $qry), MYSQLI_ASSOC);
        $numerico    = mysqli_fetch_array(mysqli_query($conexao, $qry), MYSQLI_NUM);
        $assoc       = mysqli_fetch_assoc(mysqli_query($conexao, $qry));
        $row         = mysqli_fetch_row(mysqli_query($conexao, $qry));
        $objeto      = mysqli_fetch_object(mysqli_query($conexao, $qry));
        ?>
        <pre>
        <h3>Busca no banco de dados usando mysqli_fetch_array</h3>
        <hr>
        <h4>Geral</h4>
            <?php print_r($resultSelect); ?>
        <hr></br>
        <h4>Associativo</h4>
            <?php print_r($associativo); ?>
        <hr></br>
        <h4>Numerico</h4>
            <?php print_r($numerico); ?>
        <hr></br>
        <h4>assoc</h4>
            <?php print_r($assoc); ?>
        <hr></br>
        <h4>row</h4>
            <?php print_r($row); ?>
        <hr></br>
        <h4>Objeto</h4>
            <?php print_r($objeto); ?>
        <hr></br>
        </pre>
        <h1>Informações buscadas no banco na tabela cliente</h1>
        Nome: <?php echo $assoc["cliente"];//Da coluna cliente ?></br>
        Email: <?php echo $assoc["email"];//Da coluna email ?>
        <h4>Nome com object: <?php echo $objeto->cliente ;?></h4>
    </body>
</html>