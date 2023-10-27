function ListaProdutos() {
  // Fazer uma requisição AJAX para buscar os dados do servidor
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState === 4 && this.status === 200) {
      var productData = JSON.parse(this.responseText);
      var tableBody = document.querySelector("#popup1 tbody");

      // Limpar a tabela existente
      tableBody.innerHTML = "";

      // Preencher a tabela com os dados
      productData.forEach(function (product) {
        var row = tableBody.insertRow(-1);
        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);
        var cell3 = row.insertCell(2);
        var cell4 = row.insertCell(3);

        cell1.innerHTML = product.nome;
        cell2.innerHTML = product.marca;
        cell3.innerHTML = product.quantidade;

        // Criar o botão de exclusão
        var button = document.createElement("button");
        button.className = "excluir-button";
        button.textContent = "Excluir";

        // Adicionar evento de clique para o botão de exclusão
        button.addEventListener("click", function () {
          excluirProduto(product.id, row);
        });

        cell4.appendChild(button);
      });

      document.getElementById("overlay1").style.display = "block";
    }
  };

  xhttp.open("GET", "../controllers/listarProdutos.php", true);
  xhttp.send();
}
