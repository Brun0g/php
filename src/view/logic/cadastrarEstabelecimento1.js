document.getElementById("botao1").addEventListener("submit", function (event) {
  event.preventDefault();
});
function cadastrarEstabelecimentos() {
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
