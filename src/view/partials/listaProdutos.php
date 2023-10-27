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