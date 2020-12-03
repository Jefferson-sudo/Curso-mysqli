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
        $dados = consultar('produto', 'where id_produto = 3', 'produto');

        echo"<pre>";
        var_dump($dados);
        echo"</pre>"
        ?>
    </body>
</html>


