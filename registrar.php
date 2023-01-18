<?php
    if(isset($_POST['submit']))
    {
        include('conexao.php');

        $nome=$_POST['nome'];
        $telefone=$_POST['telefone'];
        $email=$_POST['email'];
        $senha=$_POST['senha'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, telefone, email, senha) 
        VALUES ('$nome', '$telefone', '$email', '$senha')");
    } 
?>    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cssregistrocomsucesso.css">
    <title>Cadastro com sucesso</title>
</head>
<body>
    <div class="sucess">
        <h1>Cadastrado com sucesso.</h1>
        <br>
        <p>
         <Button><a href="login.php">Login</a></Button>
        </p>
        <br>
        <img src="imagens/ourocenter-logo.png" alt="sucess">
    </div>
        
</body>
</html>