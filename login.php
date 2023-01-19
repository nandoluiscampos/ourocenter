<?php
include('conexao.php');
include('conexao2.php');

if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {

      $email = $conexao->real_escape_string($_POST['email']);
      $senha = $conexao->real_escape_string($_POST['senha']);
      
      $emailAd = $conexao2->real_escape_string($_POST['email']);
      $senhaAd = $conexao2->real_escape_string($_POST['senha']);


      $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
      $sql_query = $conexao->query($sql_code) or die("Falha na execução do código SQL: " . $conexao->error);
      
      $sql_code2 = "SELECT * FROM adcliente WHERE email = '$emailAd' AND senha = '$senhaAd'";
      $sql_query2 = $conexao2->query($sql_code2) or die("Falha na execução do código SQL: " . $conexao2->error);


      $quantidade = $sql_query->num_rows;
      $quantidade2 = $sql_query2->num_rows;

      if($quantidade == 1 || $quantidade2 == 1) 
      {
         
         $usuario = $sql_query->fetch_assoc();
         $usuario2 = $sql_query2->fetch_assoc();

         if(!isset($_SESSION)) {
               session_start();
         }

         $_SESSION['id'] = $usuario['id'];
         $_SESSION['nome'] = $usuario['nome'];

         $_SESSION['id'] = $usuario2['id'];
         $_SESSION['nome'] = $usuario2['nome'];

         header("Location: index.php");

      } 
      else 
      {
         echo "Falha ao logar! E-mail ou senha incorretos";
      }

    }

}
?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Login - Ouro Center</title>
      <link rel="stylesheet" href="css/csslogin.css">
      <link rel="website icon" href="imagens/ourocenter-logo.png">
   </head>
   <body>
      <div class="wrapper">
         <div class="title">
            Ouro Center / Login
         </div>
         <form action="login.php" method="POST">
            <div class="field">
               <input type="email" name="email" required>
               <label>E-mail</label>
            </div>
            <div class="field">
               <input type="password" name="senha" required>
               <label>Senha</label>
            </div>
            <div class="content">
               <div class="checkbox">
                  <input type="checkbox" id="remember-me">
                  <label for="remember-me">Salvar login</label>
               </div>
               <div class="pass-link">
                  <a href="#">Esqueceu a senha?</a>
               </div>
            </div>
            <div class="field">
               <input type="submit" name="submit" value="Login">
            </div>
            <div class="signup-link">
               Não é membro? <a href="registrar.html">Cadastre-se</a>
            </div>
            <div class="signup-link">
               Voltar ao Site? <a href="index.php">Voltar</a>
            </div>
         </form>
         </div>
   </div>
   </body>
</html>
