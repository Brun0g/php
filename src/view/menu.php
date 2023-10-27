<!DOCTYPE html>
<html lang="pt-BR">
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
                <li> <a href="javascript:void(3);" onclick="ListaEstabelecimentos()">Listagem de Estabelecimentos</a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="javascript:void(4);" onclick="ListaProdutos()">Listagem de Produtos</a>
                </li>
            </ul>
            <ul>
                <li> <a href="javascript:void(5);" onclick="openPopupById('overlay5');">Menor Preço</a>
                </li>
            </ul>

        </div>
    </section>
    <!-- cadastro de produtos -->
    <?php include_once '../view/partials/produtos.php'; ?>

    <!-- cadastro estabelecimentos -->
    <?php include_once '../view/partials/estabelecimentos.php'; ?>

    <!-- cadastro preco -->
    <?php include_once '../view/partials/precos.php'; ?>

    <!-- lista de produtos -->
    <?php include_once '../view/partials/listaProdutos.php'; ?>

    <!-- listagem de estabelecimentos -->
    <?php include_once '../view/partials/listaEstabelecimentos.php'; ?>

    <div id="mensagem-sucesso" style="display: none">
        <p>Formulário enviado com sucesso!</p>
        <i class="fa fa-check-circle"></i>
    </div>

    <!-- Javascript DOM -->
    <?php include_once '../view/logic/scripts.php'; ?>

</body>

</html>