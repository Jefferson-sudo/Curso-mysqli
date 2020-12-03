<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Swapping Songs</title>
    </head>
    <body>
        <?php
        require ("crud.php");
        $conexao = openConection();
        $sql = "INSERT INTO `produto` (produto, valor, descricao) VALUES ('Memoria RAM 8 GB', 500.00 , 'Memoria ram para notebooks  da marca Gigabyte 8 GB slote DDR4')";
        $qry = executar($sql);
        echo "<pre>";
        var_dump($qry);
        echo "</pre>";
        ?>
    </body>
</html>


