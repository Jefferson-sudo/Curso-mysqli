<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <title>Swapping Songs</title>
    </head>
    <body>
        <?php
        require ("crud.php");

        /*$dados = array(
            "produto" => "Mouse",
            "valor" => 190.00,
            "descricao" => "Esse mouse indicado para gamers."
        );
        $insere = insertData("produto", $dados);

        $dados = array(
            "descricao" => "indicado para gamers."
        );

        $altera = updateData("produto", $dados, "id_produto` = 57");
        var_dump($altera);

        echo"</br>------------- UPDATE `produto` SET `descricao` = 'indicado para gamers.' WHERE `produto`.`id_produto` = 10";
       */
        
        $deletar = deletar("produto", "id_produto = 47");
        echo"<pre>";
        var_dump($deletar);
        echo"</pŕe>";
        echo"Forma corr  DELETE FROM `produto` WHERE id_produto = '48' ";
        ?>
    </body>
</html>


