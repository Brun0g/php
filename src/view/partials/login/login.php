<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>

    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div class="container">
        <form action="../../../controllers/autenticacao.php" method="POST">
            <h1>Login</h1>
            <form>
                <input type="text" name="login" placeholder="Nome" autocomplete="on">
                <input type="password" name="senha" placeholder="Senha" autocomplete="current-password">
                <button type="submit">Enviar</button>
                <a href="../login/criarConta.php">CRIAR CONTA</a>
            </form>
        </form>
    </div>
</body>

</html>