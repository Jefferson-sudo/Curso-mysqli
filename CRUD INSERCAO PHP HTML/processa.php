<?php   
    session_start();
    
    include_once("conexao.php");//inclue conexão 
    $nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_STRING);//recebe o nome pelo metodo post
    $email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);//recebe o email pelo metodo post
    $sexo = filter_input(INPUT_POST,'sexo',FILTER_SANITIZE_STRING);//recebe sexo
    $telefone = filter_input(INPUT_POST,'telefone',FILTER_SANITIZE_STRING);
    $cpf = filter_input(INPUT_POST,'cpf',FILTER_SANITIZE_STRING);
    //Insere dados na tabela
   $result_usuario = "INSERT INTO usuarios (nome, email, sexo, telefone, cpf) VALUES('$nome', '$email', '$sexo', '$telefone', '$cpf')";
   $resultado_usuario = mysqli_query($conn, $result_usuario);
   
   if (mysqli_insert_id($conn)) {
       $_SESSION['msg'] = "<p style='color:green;'>Usúario cadastado com sucesso!</p>";
       header("Location: index.php");
   }else{
    $_SESSION['msg'] = "<p style='color:red;'>Erro, Usuario não foi cadastrado...</p>";
        header("Location: index.php");
   }
?>