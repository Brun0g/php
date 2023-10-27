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