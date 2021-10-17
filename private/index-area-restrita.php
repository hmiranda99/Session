<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <title>Hello!</title>
</head>

<body>
    <?php
    //require : usa-se com POO, ele usa e volta, não faz o cod fazer parte da página
    //include : ele incluí na página
    //include_once : ele incluí na página, mas, não repete o cod
    include_once("./sentinela.php");
    ?>
    <main class="over display-f align-f">
        <div class="bg2 position-r display-f">
            <img class="top position-a animate-top" src="../images/top.svg" alt="">
            <img class="rigth position-a animate-rigth" src="../images/rigth.svg" alt="">
            <img class="bottom position-a animate-bottom" src="../images/bottom.svg" alt="">
            <img class="left position-a animate-left" src="../images/left.svg" alt="">
        </div>
        <div class="card2 position-a">
            <label class="title">Welcome!</label>
            <a href="../logout.php">
                <input class="button-link black" type="button" value="Sair">
            </a>
        </div>
    </main>
</body>

</html>