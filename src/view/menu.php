<!DOCTYPE html>
<html>

<head>
    <title>Cadastro de Produto</title>
    <link rel="stylesheet" href="menu.css">
</head>

<body>
    <div class="nav-container">

        <a href="javascript:void(0);" onclick=openPopup()>Cadastro de Produtos</a>

        <a href="javascript:void(1);" onclick=teste()>Listagem de Produtos</a>

        <!-- <li> <a href="javascript:void(2);" onclick="openPopup();">Cadastro de Estabelecimentos</a>
            </li>
            <li> <a href="javascript:void(3);" onclick="openPopup();">Listagem de Estabelecimentos</a>
            </li>
            <li> <a href="javascript:void(4);" onclick="openPopup();">Cadastro de Preços</a>
            </li>
            <li> <a href="javascript:void(5);" onclick="openPopup();">Listagem de Preços</a>
            </li> -->

    </div>
    <div id="overlay" class="overlay">
        <div id="popup" class="popup">
            <span class="close-button" onclick="closePopup();">X</span>
            <h1>Cadastro de Produto</h1>
            <form class="container-form" action="../controllers/cadastro.php" method="POST">
                <input type="text" id="nome" name="nome" placeholder="Nome do Produto" required>
                <input type="text" id="marca" name="marca" placeholder="Marca" required>
                <input type="number" id="quantidade" name="quantidade" placeholder="Quantidade" required>
                <button type="submit">Cadastrar</button>
            </form>
        </div>
    </div>

    <div id="overlay1" class="overlay1">
        <div id="popup1" class="popup1">
            <span class="close-button" onclick="closeListaProdutos();">X</span>
            <h1>Lista de Produtos</h1>
            <?php

            include '../controllers/listarProdutos.php';

            ?>

        </div>
    </div>


    <script src="dynamic.js"></script>
</body>

</html>