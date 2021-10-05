<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600&display=swap" rel="stylesheet">
    <title>Login</title>
</head>

<body>
    <div class="content">
        <main>

            <div class="card">
                <header>
                    <img src="./images/logo.svg" alt="logo">
                </header>
                <div class="flex">
                    <form action="./login.php" method="post">
                        <label class="margin">Enter account</label>
                        <label>Username</label>
                        <input class="border margin" type="text" name="login-hero" id="login-hero">
                        <label>Password</label>
                        <input class="border" type="password" name="pass-hero" id="pass-hero">
                        <input class="button" type="submit" value="Entrar">
                        <div class="flex1">
                            <p>Don't have an account?</p>
                            <h4>Create here</h4>
                        </div>
                    </form>
                </div>
            </div>
        </main>
        <section class="animate"></section>
    </div>
</body>

</html>