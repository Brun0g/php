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