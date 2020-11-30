<!DOCTYPE html>
<html lang="pt-br">
    <!--Codigos aula 14 e 15-->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Conhecendo mysqli fetch assoc</title>
    </head>
    <body>
        <h1>Fazendo busca no banco de dados com mysqli</h1>
        <?php
        $host = "localhost";
        $user = "root";
        $password = "";
        $database = "curso_mysqli";

        $conexao = mysqli_connect($host, $user, $password, $database) or die("Não foi possivel fazer uma conexão com o banco de dados"); //Funcao para fazer a conexao

        $qrySelect = "SELECT * FROM `cliente`"; //comando para fazer busca no banco de dados

        $resultado = @mysqli_query($conexao, $qrySelect); //Faz conexão com o BD passando os parâmetros

        $dados = @mysqli_fetch_array($resultado); // $dados  recebe os dados de resultado. A variavel $dados contem o resultado da buscaz
        ?>
        <h4>Busca no banco de dados com Mysqli_connect</h4>
        <?php
        echo"<pre>";
        if ($resultado) {//Testar busca em banco de dados
            echo"<pre>";
            print_r($resultado); //Imprime o objeto mysqli_result resultado na tela.Obs não é isso que preciso
            echo"</pre>";
        } else {
            echo"<p>Sinto muito, a busca falhou! </p> <br>";
        }
        echo"</pre>";
        ?>       
        <p>Comment.. É observavel que não é esse o resultado que almejamos</p>

        <hr> <br>

        <h4>Busca no Banco de dados com Mysqli_fecth_array</h4>
        <?php
        echo"<pre>";
        print_r($dados);
        echo"</pre>";
        ?>
        <p>Comment.. Agora sim. É isso que buscavamos!</p>
        <footer></footer>
    </body>
</html>

