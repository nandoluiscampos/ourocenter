<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cssjuninhoGames.css">
    <title>Juninho Games</title>
</head>
<body>
    <nav>
        <div class="container">
            <a href="index.php"><img class="logomarca" src="imagens/ourocenter-logo.png" alt="logomarca" height="50" width="200"></a>
            <div class="search-bar">
                <i class="uil uil-search"></i>
                <input type="search" placeholder="Pesquisar">
            </div>

            <div class="button">
                <a href="login.html">Login</a>
                <a href="registrar.html">Registre</a>
                
                <a href="formulariocontato.html"><button class="btn">Cadastre sua Loja</button></a><?php echo $_SESSION['nome'];?>
            </div>
        </div>
    </nav>
     <header>
        <div class="title">
         <img src="imagens/capajuninhogames.jpg" alt="capa">
        </div>
    </header>
    <br><br>
    <main>
        <div class="sub-titulo">
            <h1>Nossos Produtos</h1>
        </div>
    </main>       
</body>
</html>