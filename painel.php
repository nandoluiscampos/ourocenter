<?php
   include('protect.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Usuarios</title>
</head>
<body>
    <style>
        
    </style>
    <header>
        <h1>Seja bem vindo ao painel-</h1>
        <h1><?php echo $_SESSION['nome']; ?></h1>
        <Button><a href="logout.php">Sair</a></Button>
    </header>
</body>
</html>