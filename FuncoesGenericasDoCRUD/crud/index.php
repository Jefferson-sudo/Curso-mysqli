<!DOCTYPE html>
<!--Proxima aula 
    Aula 06 
    Link : https://mjailton.com.br/campus_antigo/grade/ver/1100/c2a4824ba98bb504240365aee329d71f/?f=140
-->
<html lang="en">
    <head>
        <title>Swapping Songs</title>
    </head>
    <body>
        <?php
        require ("crud.php");
         $dados = array(
          "produto"   => "Mouse",
          "valor"     => 190.00,
          "descricao" => "Esse mouse indicado para gamers."
          );
          $insere = insertData("produto", $dados); 

        $dados = array(
          
            "descricao" => "Memoria para pc"
        );
        $altera = updateData("produto", $dados, "id_produto = 48");
        var_dump($altera);
     
        echo"</br>forma certa UPDATE `produto` SET `descricao` = 'indicado para gamers.' WHERE `produto`.`id_produto` = 10";
        ?>
    </body>
</html>


