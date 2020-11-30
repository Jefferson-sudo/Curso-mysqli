<?php

//codigo para fazer conexão com banco de dados

$host = "localhost";
$user = "root";
$password = "";
$database = "curso_mysqli";

$conexao = mysqli_connect($host, $user, $password, $database) or die("Não foi possivel fazer uma conexão com o banco de dados"); //Funcao para fazer a conexao

$qry = "INSERT INTO `cliente` (`id_cliente`, `cliente`, `email`, `fone`, `endereco`) VALUES (NULL, 'Raimundo', 'raimundo@yahoo.com.br', '9999999', 'Rua 504030');"; //qry recebe o valor que vais ser passado para o BD

$resultado = @mysqli_query($conexao, $qry); //Funcao mysqli query enviada os dados passando como parametros a conexao(para saber qual BD vai) e qry(com as informacoes que vao ser inseridados no BD)

if($resultado){//Para testar de os dados foram insiridos com sucesso
    echo"Operação realizada com sucesso";
}else{
    echo"Sinto muito, a operação não pode ser realizada";
}
