<?php

//codigo para fazer conexão com banco de dados
echo"<pre>";

$host = "localhost";
$user = "root";
$password = "";
$database = "curso_mysqli";

$conexao = mysqli_connect($host, $user, $password, $database) or die("Não foi possivel fazer uma conexão com o banco de dados"); //Funcao para fazer a conexao

$qryInsert = "INSERT INTO `cliente` (`id_cliente`, `cliente`, `email`, `fone`, `endereco`) VALUES (NULL, 'Raimundo Lonato', 'raimundo@raimundoLOnato.com.br.mg.mg.loteamentocelinha.rual.n125.andar2.sala', '319999999', 'Rua 504030');"; //qry recebe o valor que vais ser passado para o BD
$qryUpdate = "UPDATE `cliente` SET `email` = 'JoseM@JoseM.com.br.mg.matipo' WHERE `cliente`.`id_cliente` = 1";
$qryDelete = "DELETE FROM `cliente` WHERE `cliente`.`id_cliente` = 14";

$resultado = @mysqli_query($conexao, $qryUpdate); //Funcao mysqli query enviada os dados passando como parametros a conexao(para saber qual BD vai) e qry(com as informacoes que vao ser inseridados no BD)

if ($resultado) {//Para testar de os dados foram insiridos com sucesso
    echo"Operação realizada com sucesso<br>";
} else {
    echo"Sinto muito, a operação não pode ser realizada <br>";
}

$result = @mysqli_query($conexao, $qryInsert);

if ($result) {//Para testar de os dados foram insiridos com sucesso
    echo"Operação realizada com sucesso<br>";
} else {
    echo"Sinto muito, a operação não pode ser realizada<br>";
}
$re = @mysqli_query($conexao, $qryDelete);
if ($result) {//Para testar de os dados foram insiridos com sucesso
    echo"Excluido com sucesso<br>";
} else {
    echo"Sinto muito, a operação não pode ser realizada<br>";
}

echo"<pre>";
//Proxima aua 11 >>>> https://mjailton.com.br/campus_antigo/grade/ver/40/22f06a18d8a998bcca1d28bccf69c97c/?f=140