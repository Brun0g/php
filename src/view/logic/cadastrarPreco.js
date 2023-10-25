document.getElementById("botao2").addEventListener("submit", function (event) {
  event.preventDefault();
});
function cadastrarPreco() {
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
