<?php

//Codigos Aulas 12 e 13

$host = "localhost";
$user = "root";



$password = "";
$database = "curso_mysqli";

$conexao = mysqli_connect($host, $user, $password, $database) or die("Não foi possivel fazer uma conexão com o banco de dados"); //Funcao para fazer a conexao
$qrySelect = "SELECT * FROM `cliente`"; //comando para fazer busca no banco de dados

$resultado = @mysqli_query($conexao, $qrySelect); //Faz conexão com o BD passando os parâmetros
$dados = @mysqli_fetch_array($resultado); // $dados  recebe os dados de resultado. A variavel $dados contem o resultado da buscaz
echo"<pre>";
if ($resultado) {//Testar busca em banco de dados
    echo"<pre>";
    echo"Mysqli connect<br>";
    print_r($resultado); //Imprime o objeto mysqli_result resultado na tela.Obs não é isso que preciso
    echo"</pre>";
} else {
    echo"<p>Sinto muito, a busca falhou!</p><br>";
}
echo"<hr> <br>";
echo"Mysqli fecth array<br>";

print_r($dados);
echo"</pre>";
