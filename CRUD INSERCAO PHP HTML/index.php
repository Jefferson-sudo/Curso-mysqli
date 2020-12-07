<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - Cadastrar</title>
</head>
<body>
    <h1>Cadastrar usuario</h1>
    <?php
        if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset ($_SESSION['msg']);
        }
    ?>
    <form method="POST" action="processa.php" ><!--Enviar os dados do formulario pelo metodo    POST para o arquivo processa.php  -->
        <label>Nome:</label>
        <input type="text" name="nome" placeholder="Digite seu nome completo">

        <label>CPF:</label>
        <input type="text" name="cpf" class="form-control cpf-mask" placeholder="Ex.: 000.000.000-00"><br><br>

        <label>Email:</label>
        <input type="email" name="email" placeholder="Digite seu email" >
       
        <label>Telefone:</label>
        <input type="text" name="telefone" class="form-control cel-sp-mask">
 
        <fieldset><legend>Sexo</legend>
            <input type="radio" name="sexo" id="mas" value="M"/>
            <label for="masc">Masculino</label><br/>
            <input type="radio" name="sexo" id="fen" value="F"/>
            <label for="fem">Feminino</label>
        </fieldset><br/>

        <input type="submit" value="Cadastrar" ><!--Botão para enviar formulario -->
    </form>
  
</body>
</html>