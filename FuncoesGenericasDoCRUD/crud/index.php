<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <title>Swapping Songs</title>
    </head>
    <body>
        <?php
        require ("crud.php");

         $dados = array(
          "produto" => "Relogo",
          "valor" => 210.00,
          "descricao" => "Relogio para academia, corrida e esportes em geral."
          );
          $insere = insertData("produto", $dados);

          $dados = array(
          "descricao" => "indicado para gamers que gostam da mar MULTLASER."
          );

          $altera = updateData("produto", $dados, "id_produto` = 61");
          var_dump($altera);

          echo"</br>------------- UPDATE `produto` SET `descricao` = 'indicado para gamers que gostam da sony.' WHERE `produto`.`id_produto` = 10";
         

        $deletar = deleteData("produto", "id_produto = 62");
        echo"<pre>";
        var_dump($deletar);
        echo"</pŕe>";
        echo"Forma corr  DELETE FROM `produto` WHERE id_produto = '' ";
        ?>
    </body>
</html>


