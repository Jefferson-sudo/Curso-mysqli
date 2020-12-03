<?php

require ("config.php");

function openConection() {
    $conexao = @mysqli_connect(HOST, USER, PASSWORD, DATABASE) or die(mysqli_connect_error());
    mysqli_set_charset($conexao, CHARSET);
    return $conexao;
}

function closeConection($conexao) {
    @mysqli_close($conexao) or die(mysqli_error($conexao));
}

//Funcoa para executar o sql
function executar($sql) {
    $conexao = openConection();

    $qry = @mysqli_query($conexao, $sql) or dia(mysqli_error($conexao));

    closeConection($conexao);
    return $qry;
}
