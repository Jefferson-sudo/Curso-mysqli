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
        $insere = inserir("produto", $dados);
        
        echo"<pre>";
        var_dump($insere);
        echo"</pre>"
        ?>
    </body>
</html>


