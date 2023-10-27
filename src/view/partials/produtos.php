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