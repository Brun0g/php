document.getElementById("botao").addEventListener("submit", function (event) {
  event.preventDefault();
});
function cadastrarProduto() {
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
