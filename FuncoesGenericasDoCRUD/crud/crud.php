<?php

require ("config.php");//Conexao com banco de dados

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

    $qry = @mysqli_query($conexao, $sql) or dia(mysqli_error($conexao));

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
