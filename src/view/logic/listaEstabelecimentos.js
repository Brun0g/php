function ListaEstabelecimentos() {
  // Fazer uma requisição AJAX para buscar os dados do servidor
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    try {
      if (this.readyState === 4 && this.status === 200) {
        var estabelecimentoData = JSON.parse(this.responseText);

        var tableBody = document.querySelector("#popup4 tbody");

        // Limpar a tabela existente
        tableBody.innerHTML = "";

        // Preencher a tabela com os dados
        estabelecimentoData.forEach(function (estabelecimento) {
          var row = tableBody.insertRow(-1);
          var cell1 = row.insertCell(0);
          var cell2 = row.insertCell(1);
          var cell3 = row.insertCell(2);
          var cell4 = row.insertCell(3);
          var cell5 = row.insertCell(4);

          cell1.innerHTML = estabelecimento.nome_fantasia;
          cell2.innerHTML = estabelecimento.endereco;
          cell3.innerHTML = estabelecimento.cidade;
          cell4.innerHTML = estabelecimento.numero_lojas;
          // Criar o botão de exclusão
          var button = document.createElement("button");
          button.className = "excluir-button1";
          button.textContent = "Excluir";

          // Adicionar evento de clique para o botão de exclusão
          button.addEventListener("click", function () {
            excluirEstabelecimento(estabelecimento.id, row);
          });

          cell5.appendChild(button);
        });

        document.getElementById("overlay4").style.display = "block";
      }
    } catch (e) {
      console.error("Erro ao analisar JSON: " + e);
    }
  };

  xhttp.open("GET", "../controllers/listaEstabelecimentos.php", true);
  xhttp.send();
}
