<?php

if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['idAdm'])) {
    die("Você não pode acessar esta página porque não está logado.<p><a href=\"loginAdm.php\">Entrar</a></p>");
}


?>