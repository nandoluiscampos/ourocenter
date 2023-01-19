<?php
include('conexao2.php');

if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {
      
      $emailAd = $conexao2->real_escape_string($_POST['email']);
      $senhaAd = $conexao2->real_escape_string($_POST['senha']);
      
      $sql_code2 = "SELECT * FROM adcliente WHERE email = '$emailAd' AND senha = '$senhaAd'";
      $sql_query2 = $conexao2->query($sql_code2) or die("Falha na execução do código SQL: " . $conexao2->error);

      $quantidade2 = $sql_query2->num_rows;

      if($quantidade2 == 1) 
      {
         
         $usuario2 = $sql_query2->fetch_assoc();

         if(!isset($_SESSION)) {
               session_start();
         }

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