<?php
  session_start();
  include('conexao.php');
  include('conexao2.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" href="css/dropdown.css">
    <title>Site Oficial- Ouro Center</title>
</head>
<body>
    <nav>
        <div class="container">
            <a class="li" href="index.php"><img class="logomarca" src="imagens/ourocenter-logo.png" alt="logomarca" height="50" width="200"></a>
            <div class="search-bar">
                <i class="uil uil-search"></i>
                <input type="search" placeholder="Pesquisar">
            </div>
            <div class="button">
                <a href="login.php">Login</a>
                <a href="registrar.html">Registre</a>    
                <a href="formulariocontato.php"><button class="btn">Cadastre sua Loja</button></a>
            </div>
                <div class="panel">
                    <?php if(isset($_SESSION['id'])) { ?>
                    <p>Bem-vindo: <?php echo $_SESSION['nome'];?></p>
                    <div class="dropdown">
                        <button class="dropbtn">Meus dados</button>
                        <div class="dropdown-content">
                        <a href="meusdados.html">Meus dados</a>
                        <a href="trocarsenha.html">Trocar senha</a>
                        <a href="logout.php">Sair</a>
                        </div>
                    </div>
                    <?php } elseif(isset($_SESSION['idAdm'])) { ?>
                        <p>Bem-vindo: <?php echo $_SESSION['nomeAdm'];?></p>
                        <div class="dropdown">
                           <button class="dropbtn">Meus dados</button>
                           <div class="dropdown-content">
                           <a href="meusdados.html">Meus dados</a>
                           <a href="trocarsenha.html">Trocar senha</a>
                           <a href="painel.php">Painel</a>
                           <a href="logout.php">Sair</a>
                        </div>
                    <?php } else { ?>
                        <p>Seja bem vindo(a)</p>
                    <?php } ?>
                </div>
        </div>
    </nav>  
    <header>
        <div class="title">
         <img src="imagens/capa.jpg" alt="capa">
        </div>

        <div class="titulo">
            <h1>Ouro Center</h1>
            <h2>Shopping Online</h2>
        </div>

    </header>
    <br><br>
    <main>   
        <div class="sub-titulo">
        <h1>Encontre sua loja</h1>
        </div>
    <div class="lojas">
        <div class="cards">
            <img src="imagens/juninhogames.jpeg"  alt="lojaJuninho" height="150" width="150">
            <h3>Juninho Games</h3>
            <a class="botao" href="juninhoGames.php">Acessar</a>
        </div>
        <div class="cards">
            <img src="imagens/exclusiva.png"  alt="loja" height="150" width="150">
            <h3>Exlusiva Boutique</h3>
            <a class="botao" href="loja2.html">Acessar</a>
        </div>
        <div class="cards">
            <img src="imagens/exclusiva.png"  alt="loja" height="150" width="150">
            <h3>Exlusiva Boutique</h3>
            <a class="botao" href="loja2.html">Acessar</a>
        </div>
        <div class="cards">
            <img src="imagens/exclusiva.png"  alt="loja" height="150" width="150">
            <h3>Exlusiva Boutique</h3>
            <a class="botao"  href="loja2.html">Acessar</a>
        </div>
        <div class="cards">
            <img src="imagens/exclusiva.png"  alt="loja" height="150" width="150">
            <h3>Exlusiva Boutique</h3>
            <a class="botao" href="loja2.html">Acessar</a>
        </div>
        <div class="cards">
            <img src="imagens/exclusiva.png" alt="loja" height="150" width="150">
            <h3>Exlusiva Boutique</h3>
            <a class="botao" href="loja2.html">Acessar</a>
        </div>
    </div> 
    <br>
    <div class="lojas2">
        <div class="cards2">
            <img src="imagens/exclusiva.png"  alt="loja2" height="150" width="150">
            <h3>Exlusiva Boutique</h3>
            <a class="botao" href="loja2.html">Acessar</a>
        </div>
        <div class="cards2">
            <img src="imagens/exclusiva.png"  alt="loja2" height="150" width="150">
            <h3>Exlusiva Boutique</h3>
            <a class="botao" href="loja2.html">Acessar</a>
        </div>
        <div class="cards2">
            <img src="imagens/exclusiva.png" alt="loja2" height="150" width="150">
            <h3>Exlusiva Boutique</h3>
            <a class="botao" href="loja2.html">Acessar</a>
        </div>
        <div class="cards2">
            <img src="imagens/exclusiva.png" alt="loja2" height="150" width="150">
            <h3>Exlusiva Boutique</h3>
            <a class="botao" href="loja2.html">Acessar</a>
        </div>
        <div class="cards2">
            <img src="imagens/exclusiva.png" alt="loja2" height="150" width="150">
            <h3>Exlusiva Boutique</h3>
            <a class="botao" href="loja2.html">Acessar</a>
        </div>
        <div class="cards2">
            <img src="imagens/exclusiva.png" alt="loja2" height="150" width="150">
            <h3>Exlusiva Boutique</h3>
            <a class="botao" href="loja2.html">Acessar</a>
        </div>
    </div> 
    <br><br>
        <div class="tit" >
            <h1>Ouro Center Shopping</h1>     
        </div>
        <div class="tit-img">
            <img src="imagens/ourocenter-logo.png" alt="barra" wight="150" height="150">    
        </div>
        <br>
        <div class="tit-text">
            <p>
                Para agradar a toda fam??lia e os mais variados estilos, 
                o Ouro Center Shopping conta com as melhores tend??ncias, 
                um dos maiores centros de lojas de Ouro Fino e regi??o. 
            </p>
        </div>
    </main>
    <br><br>
    <footer>
        <br>
        <h3>?? TODOS OS DIREITOS RESERVADOS </h3>
        <br>
            <div class="rodape"> 
                 <img src="imagens/cartoes.png" alt="cartoes"  wight="100" height="100">          
            </div>
            <div class="menu-lateral">
                <ul>
                    <li>
                        <a href="loginAdm.php">Login Empresas</a>
                    </li>
                    <li>
                        <a href="login.php">Login</a>
                    </li>
                    <li>
                        <a href="registrar.html">Registre</a>
                    </li>
                    <li>
                        <a href="formulariocontato.php">Cadastre sua Loja</a>
                    </li>
                    <li>
                        <a href="quemsomos.html">Quem Somos</a>
                    </li>
                   
                </ul>
            </div> 
            <br>
        <div class="ult">
            <h4>Ouro Center - O Shopping Online de Ouro Fino e regi??o</h4>
        </div>    
    </footer>
</body>
</html>