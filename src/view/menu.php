<!DOCTYPE html>
<html lang="pt-BR">
<<<<<<< HEAD
<?php
include_once '../view/styles/head.php';
include_once '../controllers/autenticacao.php';
?>
<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    header('Location: ../../partials/login/login.php');
    exit;
}
?>
=======

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="../view/cadastrarPreco/preco.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css" rel="stylesheet">

</head>
<style>
.product-container {
    display: flex;
    flex-wrap: wrap;

}

.product-item {
    flex: 1;
    margin: 10px;
    padding: 10px;
    border: 1px solid #ccc;

}

.product-name {
    font-size: 18px;
    font-weight: bold;
    color: #333;
    border: solid white 1px;
}

.product-info {
    font-size: 14px;
    color: #666;
    border: solid white 1px;
    text-align: center;
}

.delete-button {
    background-color: #f00;
    color: #fff;
    border: none;
    padding: 5px 10px;
    cursor: pointer;

}


.product,
.estabelecimento {
    display: flex;
    width: 100%;
    justify-content: center;
    align-items: center;
    align-content: center;
    color: greenyellow;
    font-size: 14px;
    /* Ajuste a altura máxima conforme necessário */
    text-align: center;
}

.product-name,
.estabelecimento-name,
.estabelecimento-info,
.product-info {
    color: #fff;
    font-size: 14px;
}


.product tr,
.estabelecimento tr {
    text-align: center;
    width: 100%;
    justify-content: center;
    align-items: center;
    align-content: center;
}

.product table,
.estabelecimento table {
    width: 100%;
}

.excluir-button {
    font-weight: 900;
}
</style>
>>>>>>> 4d7aa8813d3ecd820729eaaf086619aa7edc23fa

<body>
    <section class="nav-container">
        <div class="nav-sub">
            <div class="teste10">
                <img class="image-perfil" src="../../Screenshot_16.png" alt="foto-perfil">
                <div class="description">
                    <div class="description1">
                        <div class="nome-perfil">Bruno Gabriel</div>
                        <div class="nome-email">brunogabriel3331@gmail.com</div>
                    </div>
                </div>
            </div>
            <div class="teste13">
                <div class="description">
                    <div class="nome-email">Celular</div>
                </div>
            </div>
            <div class="teste11">
                <div class="description">
                    <div class="nome-email">Update</div>
                </div>
            </div>
            <div class="teste12">
                <div class="description">
                    <div class="nome-email">System</div>
                </div>
            </div>
        </div>
        <div class="cont-dynamic-item">
            <ul>
                <li><a href="javascript:void(0);" onclick="openPopupById('overlay');">Cadastro de Produtos</a></li>
                </li>
            </ul>
            <ul>
                <li> <a href="javascript:void(1);" onclick="openPopupById('overlay3');">Cadastrar Estabelecimentos</a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="javascript:void(2);" onclick="openPopupById('overlay2');">Cadastro de Preços</a>
                </li>
            </ul>
            <ul>
<<<<<<< HEAD
                <li> <a href="javascript:void(3);" onclick="ListaEstabelecimentos()">Listagem de Estabelecimentos</a>
=======
                <li> <a href="javascript:void(3);" onclick="openPopupById('overlay4');">Listagem de Estabelecimentos</a>
>>>>>>> 4d7aa8813d3ecd820729eaaf086619aa7edc23fa
                </li>
            </ul>
            <ul>
                <li>
<<<<<<< HEAD
                    <a href="javascript:void(4);" onclick="ListaProdutos()">Listagem de Produtos</a>
=======
                    <a href="javascript:void(4);" onclick="openPopupById('overlay1');">Listagem de Produtos</a>
>>>>>>> 4d7aa8813d3ecd820729eaaf086619aa7edc23fa
                </li>
            </ul>
            <ul>
                <li> <a href="javascript:void(5);" onclick="openPopupById('overlay5');">Menor Preço</a>
                </li>
            </ul>

        </div>
    </section>
    <!-- cadastro de produtos -->
<<<<<<< HEAD
    <?php include_once '../view/partials/produtos.php'; ?>

    <!-- cadastro estabelecimentos -->
    <?php include_once '../view/partials/estabelecimentos.php'; ?>

    <!-- cadastro preco -->
    <?php include_once '../view/partials/precos.php'; ?>

    <!-- lista de produtos -->
    <?php include_once '../view/partials/listaProdutos.php'; ?>

    <!-- listagem de estabelecimentos -->
    <?php include_once '../view/partials/listaEstabelecimentos.php'; ?>

=======
    <div id="overlay" class="overlay" style="display: none">
        <div id="popup" class="popup">
            <span class="close-button" onclick="closePopupById('overlay');">X</span>
            <h1>Cadastro de Produto</h1>
            <form class="container-form" method="POST" id="botao">
                <input type="text" id="nome" name="nome" placeholder="Nome do Produto" required>
                <input type="text" id="marca" name="marca" placeholder="Marca" required>
                <input type="number" id="quantidade" name="quantidade" placeholder="Quantidade" required>
                <button type="submit" onclick="cadastrarProduto();">Cadastrar</button>
            </form>
        </div>
    </div>
    <!-- cadastro estabelecimentos -->
    <div id="overlay3" class="overlay3" style="display: none">
        <div id="popup3" class="popup3">
            <span class="close-button" onclick="closePopupById('overlay3');">X</span>
            <h1>Cadastro Estabelecimentos</h1>
            <form class="container-form" method="POST" id="botao1">
                <input type="text" id="nome_fantasia" name="nome_fantasia" placeholder="Nome fantasia" required>
                <input type="text" id="endereco" name="endereco" placeholder="Endereço" required>
                <input type="text" id="cidade" name="cidade" placeholder="Cidade" required>
                <input type="number" id="numero_lojas" name="numero_lojas" placeholder="Número de lojas" required>
                <button type="submit" onclick="cadastrarEstabelecimentos();">Cadastrar</button>
            </form>
        </div>
    </div>
    <!-- cadastro preco -->
    <div id="overlay2" class="overlay2" style="display: none">
        <div id="popup2" class="popup2">
            <span class="close-button" onclick="closePopupById('overlay2');">X</span>
            <h1>Cadastro de Preço</h1>
            <form action="processar_cadastro_preco.php" method="post" id="botao2">
                <label for="produto">Selecione o Produto:</label>
                <select id="produto" name="produto" required>
                    <?php
                    include '../controllers/nomeProduto.php';
                    ?>
                </select>
                <label for="estabelecimento">Selecione o Estabelecimento:</label>
                <select id="estabelecimento" name="estabelecimento" required>
                    <?php
                    include '../controllers/nomeEstabelecimento.php';
                    ?>
                </select>
                <label for="preco">Preço:</label>
                <input type="text" id="preco" name="preco" placeholder="Informe o preço" required>
                <button class="button5" type="submit" onclick="cadastrarPreco();">Cadastrar</button>
            </form>
        </div>
    </div>
    <!-- lista de produtos -->
    <div id="overlay1" class="overlay1" style="display: none">
        <div id="popup1" class="popup1">
            <span class="close-button" onclick="closePopupById('overlay1');">X</span>
            <h1>Lista de Produtos</h1>
            <div class="product">
                <table>
                    <thead>
                        <tr>
                            <th class="product-name">Nome</th>
                            <th class="product-info">Marca</th>
                            <th class="product-info">Quantidade</th>
                            <th class="product-info">Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Nome do Produto</td>
                            <td>Marca do Produto</td>
                            <td>Quantidade do Produto</td>
                            <td>
                                <button class="excluir-button" data-product-id="1" onclick="excluirProduto(this)">Excluir</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- listagem de estabelecimentos -->
    <div id="overlay4" class="overlay4" style="display: none">
        <div id="popup4" class="popup4">
            <span class="close-button" onclick="closePopupById('overlay4');">X</span>
            <h1>Lista de Estabelecimentos</h1>
            <div class="estabelecimento">
                <table>
                    <thead>
                        <tr>
                            <th class="estabelecimento-name">Empresa</th>
                            <th class="estabelecimento-info">Endereço</th>
                            <th class="estabelecimento-info">Cidade</th>
                            <th class="estabelecimento-info">Lojas</th>
                            <th class="estabelecimento-info">Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Empresa</td>
                            <td>Endereço</td>
                            <td>Cidade</td>
                            <td>Lojas</td>
                            <td>
                                <button class="excluir-button1" data-estabelecimento-id="1" onclick="excluirEstabelecimento(this)">Excluir</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
>>>>>>> 4d7aa8813d3ecd820729eaaf086619aa7edc23fa
    <div id="mensagem-sucesso" style="display: none">
        <p>Formulário enviado com sucesso!</p>
        <i class="fa fa-check-circle"></i>
    </div>
<<<<<<< HEAD

    <!-- Javascript DOM -->
    <?php include_once '../view/logic/scripts.php'; ?>

=======
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script defer src="logic/cadastrarProduto.js"></script>
    <script defer src="logic/cadastrarEstabelecimento.js"></script>
    <script defer src="logic/cadastrarPreco.js"></script>
    <script defer src="logic/excluirEstabelecimento.js"></script>
    <script defer src="logic/excluirProduto.js"></script>
    <script defer src="logic/listaProdutos.js"></script>
    <script defer src="logic/listaEstabelecimentos.js"></script>
    <script defer src="logic/botao.js"></script>
>>>>>>> 4d7aa8813d3ecd820729eaaf086619aa7edc23fa
</body>

</html>