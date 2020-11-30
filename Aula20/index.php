<!DOCTYPE html>
<html lang="pt-br">
    <!--Codigos das aulas 20 e 21-->
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
        <title>Conhecendo mysqli_fetch_field</title>
    </head>
    <body>
        <?php
        //Fazendo a conexão
        $host = "localhost";
        $user = "root";
        $password = "";
        $database = "curso_mysqli";

        $conexao = mysqli_connect($host, $user, $password, $database); //Faz conexao

        $qry = "SELECT * FROM `cliente`"; //Comando sql que busca todos os dados da tabela cliente

        $campo = mysqli_fetch_field(mysqli_query($conexao, $qry));//Campo
        $campos = mysqli_fetch_fields(mysqli_query($conexao, $qry));//Mostra o campo
        ?>

        <!--Mostrando os dados na tela-->
        <?php
        echo"<h3>mysqli_fecth_field</h3>";
        echo"<pre>";
        print_r($campo);
        echo"</pre>";

        echo"<h3>mysqli_fecth_fields</h3>";
        echo"<pre>";
        var_dump($campos);
        echo"</pre>";
        
        echo"<hr>";
        echo"<h4>Monstra o nome do campo</h4>Nome do campo: ".$campo->name."</br>";
        echo"Nome do campo: ".$campos[4]->name;
        
        ?>
    </body>
</html>
