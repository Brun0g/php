<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Conta</title>

    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div class="container">
        <form action="../../../controllers/cadastrarConta.php" method="POST">
            <h1>Cadastrar Conta</h1>
            <form>
                <input type="text" id="nome" name="nome" placeholder="Nome">
                <input type="text" id="login" name="login" placeholder="login">
                <input type="password" id="senha" name="senha" placeholder="Senha">
                <input type="password" name="senha" placeholder="Confirmar Senha">
                <button type="submit">Enviar</button>

            </form>
        </form>
    </div>
</body>

</html>