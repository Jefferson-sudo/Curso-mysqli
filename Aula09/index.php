<?php
/*PROGRAMA CRIADO SOMENTE COM  A FINALIDADE DE FAZER TESTES DE CONEXÃO COM BD*/
//codigo para fazer conexão com banco de dados

$host = "localhost";
$user = "root";
$password = "";
$database = "curso_mysqli";

$conexao = mysqli_connect($host, $user, $password, $database) or die("Não foi possivel fazer uma conexão com o banco de dados"); //Funcao para fazer a conexao

$qryInsert /*query para inserir dados*/= "INSERT INTO `cliente` (`id_cliente`, `cliente`, `email`, `fone`, `endereco`) VALUES (NULL, 'Raimundo Lonato', 'raimundo@raimundoLOnato.com.br.mg.mg.loteamentocelinha.rual.n125.andar2.sala', '319999999', 'Rua 504030');"; //qry recebe o valor que vais ser passado para o BD
$qryUpdate /*query para atualizar dados*/= "UPDATE `cliente` SET `email` = 'JoseM@JoseM.com.br.mg.matipo' WHERE `cliente`.`id_cliente` = 1";

$resultado = @mysqli_query($conexao, $qryUpdate); //Funcao mysqli query enviada os dados passando como parametros a conexao(para saber qual BD vai) e qry(com as informacoes que vao ser inseridados no BD)

if ($resultado) {//Para testar de os dados foram insiridos com sucesso
    echo"Operação realizada com sucesso";
} else {
    echo"Sinto muito, a operação não pode ser realizada <br>";
}

$result = @mysqli_query($conexao, $qryInsert);

if ($result) {//Para testar de os dados foram insiridos com sucesso
    echo"Operação realizada com sucesso";
} else {
    echo"Sinto muito, a operação não pode ser realizada";
}