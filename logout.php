<?php
    session_start();
    //sempre inicie uma sessão ^
    unset($_SESSION['login-on']);
    unset($_SESSION['pass-on']);
    //limpando as variáveis de sessão ^
    session_destroy();
    //destruindo a sessão ^
    header("Location: ./index.php");
    //levar o usuário para fora do site ^
?>