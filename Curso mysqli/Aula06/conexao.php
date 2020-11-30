<?php

//codigo para fazer conexão com banco de dados

$host = "localhost";
$user = "root";
$password = "";
$database = "curso_mysqli";
echo"<pre>";
$conexao = mysqli_connect($host, $user, $password, $database) or die(mysqli_connect_error()); //Funcao para fazer a conexao
var_dump($conexao);
echo "</pre>";
