<?php

require ("config.php"); //Conexao com banco de dados

function openConection() {//Abrir conexao
    $conexao = @mysqli_connect(HOST, USER, PASSWORD, DATABASE) or die(mysqli_connect_error());
    mysqli_set_charset($conexao, CHARSET);
    return $conexao;
}

function closeConection($conexao) {//Fechar conexao
    @mysqli_close($conexao) or die(mysqli_error($conexao));
}

//Funcoa para executar o sql
function executar($sql) {
    $conexao = openConection();

    $qry = @mysqli_query($conexao, $sql) or die(mysqli_erro($conexao));

    closeConection($conexao);
    return $qry;
}

function consultar($tabela, $condicao = NULL, $campos = "*") {//Funcoa para executar SELECT 
    $sql = "SELECT {$campos} FROM {$tabela} {$condicao}";
    $qry = executar($sql);

    if (!mysqli_num_rows($qry)) {
        return FALSE;
    } else {
        while ($linha = @mysqli_fetch_array($qry)) {
            $dados[] = $linha;
        }
        return $dados;
    }
}

function inserir($tabela, array $dados) {
    $conexao = openConection();

    $campos = implode(", ", array_keys($dados)); //Pega as chaves do array 
    $valores = "'" . implode("','", $dados) . "'"; //Pega os valores do array
    $sql = "INSERT INTO `$tabela`({$campos}) VALUES ({$valores})";

    executar($sql);
    return executar($sql);
}
