<?php
//Codigos da Aula 11

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
$qrySelect = "SELECT * FROM `cliente`";

if ($conexao) {//Para testar se a conexão foi feita com o banco de dados
    echo"Conexão realizada com sucesso<br>";
}

$resultado = @mysqli_query($conexao, $qrySelect);

if ($resultado) {//Testar busca em banco de dados
    echo"<pre>";
    print_r($resultado);//Imprime o objeto msqli_result resultado na tela.Obs não é isso que preciso
    echo"</pre>";
} else {
    echo"<p>Sinto muito, a busca falhou!</p><br>";
}

echo"<pre>";
//Proxima aua 11 >>>> https://mjailton.com.br/campus_antigo/grade/ver/40/22f06a18d8a998bcca1d28bccf69c97c/?f=140