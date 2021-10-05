<?php
    session_start();
    if(($_SESSION['login-on'] != 'adm') ||
        ($_SESSION['pass-on'] != '123')){
            //verifica se a senha e o login são válidos
            //se não, redireciona para a primeira página
            header("Location: ../index.php");
        }
?>