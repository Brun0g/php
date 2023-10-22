function openPopup() {
  document.getElementById("overlay").style.display = "block";
}

function closePopup() {
  document.getElementById("overlay").style.display = "none";
}
function openPopup1() {
  document.getElementById("overlay3").style.display = "block";
}

function closePopup1() {
  document.getElementById("overlay3").style.display = "none";
}

function teste() {
  document.getElementById("overlay1").style.display = "block";
}

function closeListaProdutos() {
  document.getElementById("overlay1").style.display = "none";
}

document.getElementById("botao").addEventListener("submit", function (event) {
  event.preventDefault();
});

function enviarFormulario() {
  // Coletar dados do formulário
  const nome = document.getElementById("nome").value;
  const marca = document.getElementById("marca").value;
  const quantidade = document.getElementById("quantidade").value;

  // Enviar dados via AJAX
  const xhr = new XMLHttpRequest();
  xhr.open("POST", "../controllers/cadastro.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      if (xhr.responseText === "success") {
        const mensagemSucesso = document.getElementById("mensagem-sucesso");
        const manter = document.getElementById("overlay");

        mensagemSucesso.style.display = "block";
        manter.style.display = "block";

        setTimeout(function () {
          mensagemSucesso.style.display = "none";
        }, 1500);
      } else {
        alert("Erro ao cadastrar o produto: " + xhr.responseText);
      }
    }
  };

  xhr.send("nome=" + nome + "&marca=" + marca + "&quantidade=" + quantidade);
}

function closeListaProdutos() {
  document.getElementById("overlay1").style.display = "none";
}

function openListaProdutos() {
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

function excluirProduto(productId, row) {
  // Fazer uma requisição AJAX para excluir o produto
  var deleteRequest = new XMLHttpRequest();
  deleteRequest.onreadystatechange = function () {
    if (this.readyState === 4 && this.status === 200) {
      row.remove();
    }
  };

  deleteRequest.open("POST", "../controllers/excluirProduto.php", true);
  var formData = new FormData();
  formData.append("Id", productId); // Usando o nome correto, que é "id"

  deleteRequest.send(formData);
}
document.getElementById("botao1").addEventListener("submit", function (event) {
  event.preventDefault();
});
function enviarEstabelecimentos() {
  // Coletar dados do formulário
  const nome_fantasia = document.getElementById("nome_fantasia").value;
  const endereco = document.getElementById("endereco").value;
  const cidade = document.getElementById("cidade").value;
  const lojas = document.getElementById("numero_lojas").value;

  // Enviar dados via AJAX
  const xhr = new XMLHttpRequest();
  xhr.open("POST", "../controllers/cadastrarLojas.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      if (xhr.responseText === "success") {
        const mensagemSucesso = document.getElementById("mensagem-sucesso");
        const manter = document.getElementById("overlay3");

        mensagemSucesso.style.display = "block";
        manter.style.display = "block";

        setTimeout(function () {
          mensagemSucesso.style.display = "none";
        }, 1500);
      } else {
        alert("Erro ao cadastrar o produto: " + xhr.responseText);
      }
    }
  };

  xhr.send("nome_fantasia=" + nome_fantasia + "&endereco=" + endereco + "&cidade=" + cidade + "&numero_lojas=" + lojas);
}
