<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <title>Login</title>
</head>

<body>
    <div class="content">
        <main class="area-a display-f align-f">
            <div class="card">
                <header class="display-f">
                    <img class="img-h" src="./images/logo.svg" alt="logo">
                </header>
                <div class="display-f align-f flex">
                    <form action="./login.php" method="post">
                        <?php
                        if (isset($_GET['message'])) {
                            echo ("<label class='warning display-f'><span class='m material-icons-outlined'>
                            error</span>" . $_GET['message'] . "</label>");
                        }
                        ?>
                        <label class="title margin">Enter account</label>
                        <label>Username</label>
                        <input class="border margin" type="text" name="login-hero" id="login-hero">
                        <label>Password</label>
                        <input class="border" type="password" name="pass-hero" id="pass-hero">
                        <input class="button black" type="submit" value="Log in">
                        <div class="display-f align-f">
                            <p>Don't have an account?</p>
                            <h4>Create here</h4>
                        </div>
                    </form>
                </div>
            </div>
        </main>
        <section class="area-b bg animate"></section>
    </div>
</body>

</html>