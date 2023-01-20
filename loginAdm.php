<?php
include('conexao2.php');

if(isset($_POST['emailAdm']) || isset($_POST['senhaAdm'])) 
{

    if(strlen($_POST['emailAdm']) == 0 ) 
    {
        echo "Preencha seu e-mail";
    } 
    else if(strlen($_POST['senhaAdm']) == 0 ) 
    {
        echo "Preencha sua senha";
    } 
    else
   {
      $emailAd = $conexao2->real_escape_string($_POST['emailAdm']);
      $senhaAd = $conexao2->real_escape_string($_POST['senhaAdm']);
      
      $sql_code2 = "SELECT * FROM adcliente WHERE emailAdm = '$emailAd' AND senhaAdm = '$senhaAd'";
      $sql_query2 = $conexao2->query($sql_code2) or die("Falha na execução do código SQL: " . $conexao2->error);

      $quantidade2 = $sql_query2->num_rows;

      if($quantidade2 == 1)
      {
         $usuario2 = $sql_query2->fetch_assoc(); 

         if(!isset($_SESSION)) {
            session_start();
         }

         $_SESSION['idAdm'] = $usuario2['idAdm'];
         $_SESSION['nomeAdm'] = $usuario2['nomeAdm'];

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
            OuroCenter Empresas
         </div>
         <form action="loginAdm.php" method="POST">
            <div class="field">
               <input type="email" name="emailAdm" required>
               <label>E-mail</label>
            </div>
            <div class="field">
               <input type="password" name="senhaAdm" required>
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