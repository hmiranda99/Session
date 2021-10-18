<?php
    $login = $_POST['login-hero'];
    $password = $_POST['pass-hero'];

    if (($login == 'adm') && ($password == '123')){
        //redirecionar para a área restrita 

        header("Location: ./private/index-area-restrita.php");
        //validando o usuário
        //email e senha ok ^
        session_start();
        //iniciei a sessão ^
        $_SESSION['login-on'] = $login;
        $_SESSION['pass-on'] = $password;
        //criando a sessão ^
    } else{
        // caso não seja validado
        // redirecionar para a página inicial, sem acesso a parte privada
        header("Location: ./index.php?message=User or password incorrect.");
    }
?>