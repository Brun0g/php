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