<!DOCTYPE html>
<html>

<head>
    <title>Cadastro de Produto</title>
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css" rel="stylesheet" />
    <!-- MDB -->
    <script defer type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
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


.product {
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
.product-info {
    color: #fff;
    font-size: 14px;
}


.product tr {
    text-align: center;
    width: 100%;
    justify-content: center;
    align-items: center;
    align-content: center;
}

.product table {
    width: 100%;
}

.excluir-button {
    font-weight: 900;
}
</style>

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
                <li> <a href="javascript:void(0);" onclick=openPopup()>Cadastro de Produtos</a>
                </li>
            </ul>
            <ul>
                <li> <a href="javascript:void(1);" onclick=openListaProdutos()>Listagem de Produtos</a>
                </li>
            </ul>
            <ul>
                <li> <a href="javascript:void(2);" onclick=openPopup1();>Cadastrar Estabelecimentos</a>
                </li>
            </ul>
            <ul>
                <li> <a href="javascript:void(3);" onclick=openPopup2();>Cadastro de Preços</a>
                </li>
            </ul>
        </div>
    </section>
    <div id="overlay" class="overlay" style="display: none">
        <div id="popup" class="popup">
            <span class="close-button" onclick="closePopup();">X</span>
            <h1>Cadastro de Produto</h1>
            <form class="container-form" method="POST" id="botao">
                <input type="text" id="nome" name="nome" placeholder="Nome do Produto" required>
                <input type="text" id="marca" name="marca" placeholder="Marca" required>
                <input type="number" id="quantidade" name="quantidade" placeholder="Quantidade" required>
                <button type="submit" onclick="enviarFormulario();">Cadastrar</button>
            </form>
        </div>
    </div>
    <div id="overlay1" class="overlay1" style="display: none">
        <div id="popup1" class="popup1">
            <span class="close-button" onclick="closeListaProdutos();">X</span>
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
                        <!-- Outras linhas da tabela podem ser adicionadas dinamicamente via JavaScript -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div id="overlay2" class="overlay2" style="display: none">
        <div id="popup2" class="popup2">
            <span class="close-button" onclick="closePopup2();">X</span>
            <h1>Cadastro de Preço</h1>
            <form action="processar_cadastro_preco.php" method="post">
                <label for="produto">Selecione o Produto:</label>
                <select id="produto" name="produto">
                    <?php
                    include '../controllers/nomeProduto.php';
                    ?>
                </select>
                <label for="estabelecimento">Selecione o Estabelecimento:</label>
                <select id="estabelecimento" name="estabelecimento">
                    <?php
                    include '../controllers/nomeEstabelecimento.php';
                    ?>
                </select>
                <label for="preco">Preço:</label>
                <input type="text" id="preco" name="preco" placeholder="Informe o preço" required>
                <input type="submit" value="Cadastrar Preço">
            </form>
        </div>
    </div>
    <div id="overlay3" class="overlay3" style="display: none">
        <div id="popup3" class="popup3">
            <span class="close-button" onclick=closePopup1()>X</span>
            <h1>Cadastro Estabelecimentos</h1>
            <form class="container-form" method="POST" id="botao1">
                <input type="text" id="nome_fantasia" name="nome_fantasia" placeholder="Nome fantasia" required>
                <input type="text" id="endereco" name="endereco" placeholder="Endereço" required>
                <input type="text" id="cidade" name="cidade" placeholder="Cidade" required>
                <input type="number" id="numero_lojas" name="numero_lojas" placeholder="Número de lojas" required>
                <button type="submit" onclick="enviarEstabelecimentos();">Cadastrar</button>
            </form>
        </div>
    </div>
    <div id="mensagem-sucesso" style="display: none">
        <p>Formulário enviado com sucesso!</p>
        <i class="fa fa-check-circle"></i>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="logic/dynamic.js">

    </script>
    <script src="logic/botao.js"></script>
</body>

</html>