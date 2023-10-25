document.getElementById("botao").addEventListener("submit", function (event) {
  event.preventDefault();
});
document.getElementById("botao1").addEventListener("submit", function (event) {
  event.preventDefault();
});
document.getElementById("botao2").addEventListener("submit", function (event) {
  event.preventDefault();
});
function enviarFormulario() {
  // Coletar dados do formulário
  const nomeInput = document.getElementById("nome");
  const marcaInput = document.getElementById("marca");
  const quantidadeInput = document.getElementById("quantidade");

  const nome = nomeInput.value;
  const marca = marcaInput.value;
  const quantidade = quantidadeInput.value;

  // Verificar se algum campo está em branco
  if (nome === "" || marca === "" || quantidade === "") {
    return; // Impede o envio do formulário
  }
  // Enviar dados via AJAX
  const xhr = new XMLHttpRequest();
  xhr.open("POST", "../controllers/cadastro.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      if (xhr.responseText === "success") {
        // Limpar os campos após o envio bem-sucedido
        nomeInput.value = "";
        marcaInput.value = "";
        quantidadeInput.value = "";

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
  formData.append("id", productId); // Usando o nome correto, que é "id"

  deleteRequest.send(formData);
}
function excluirEstabelecimento(estabelecimentoId, row) {
  // Fazer uma requisição AJAX para excluir o produto
  var deleteRequest = new XMLHttpRequest();
  deleteRequest.onreadystatechange = function () {
    if (this.readyState === 4 && this.status === 200) {
      row.remove();
    }
  };

  deleteRequest.open("POST", "../controllers/excluirEstabelecimento.php", true);
  var formData = new FormData();
  formData.append("id", estabelecimentoId); // Usando o nome correto, que é "id"

  deleteRequest.send(formData);
}
function enviarEstabelecimentos() {
  // Coletar dados do formulário
  const nome_fantasiaInput = document.getElementById("nome_fantasia");
  const enderecoInput = document.getElementById("endereco");
  const cidadeInput = document.getElementById("cidade");
  const lojasInput = document.getElementById("numero_lojas");

  const nome_fantasia = nome_fantasiaInput.value;
  const endereco = enderecoInput.value;
  const cidade = cidadeInput.value;
  const lojas = lojasInput.value;

  if (nome_fantasia === "" || endereco === "" || cidade === "" || lojas === "") {
    return; // Impede o envio do formulário
  }

  // Construir um objeto FormData para enviar os dados
  const formData = new FormData();
  formData.append("nome_fantasia", nome_fantasia);
  formData.append("endereco", endereco);
  formData.append("cidade", cidade);
  formData.append("numero_lojas", lojas);

  // Enviar dados via Fetch API
  fetch("../controllers/cadastrarLojas.php", {
    method: "POST",
    body: formData,
  })
    .then((response) => {
      if (!response.ok) {
        throw new Error("A solicitação falhou");
      }
      return response.text();
    })
    .then((data) => {
      if (data === "success") {
        nome_fantasiaInput.value = "";
        enderecoInput.value = "";
        cidadeInput.value = "";
        lojasInput.value = "";

        const mensagemSucesso = document.getElementById("mensagem-sucesso");
        const manter = document.getElementById("overlay3");

        mensagemSucesso.style.display = "block";
        manter.style.display = "block";

        setTimeout(function () {
          mensagemSucesso.style.display = "none";
        }, 1500);
      } else {
        alert("Erro ao cadastrar o produto: " + data);
      }
    })
    .catch((error) => {
      console.error("Erro: " + error);
    });
}

function enviarPreco() {
  // Coletar dados do formulário
  const produtoInput = document.getElementById("produto");
  const estabelecimentoInput = document.getElementById("estabelecimento");
  const precoInput = document.getElementById("preco");

  const produto = produtoInput.value;
  const estabelecimento = estabelecimentoInput.value;
  const preco = precoInput.value;

  if (produto === "" || estabelecimento === "" || preco === "") {
    return; // Impede o envio do formulário
  }
  // Enviar dados via AJAX
  const xhr = new XMLHttpRequest();
  xhr.open("POST", "../controllers/processar_cadastro_preco.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      if (xhr.responseText === "success") {
        const mensagemSucesso = document.getElementById("mensagem-sucesso");
        const manter = document.getElementById("overlay2");

        produtoInput.value = "";
        estabelecimentoInput.value = "";
        precoInput.value = "";

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

  xhr.send("produto=" + produto + "&estabelecimento=" + estabelecimento + "&preco=" + preco);
}
function openListaEstabelecimentos() {
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
