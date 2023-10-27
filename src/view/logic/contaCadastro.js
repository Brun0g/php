function cadastrarConta() {
  // Coletar dados do formulário
  const loginInput = document.getElementById("login");
  const senhaInput = document.getElementById("senha");
  const nomeInput = document.getElementById("nome");

  const login = loginInput.value;
  const senha = senhaInput.value;
  const nome = nomeInput.value;

  // Verificar se algum campo está em branco
  if (login === "" || senha === "" || nome === "") {
    return; // Impede o envio do formulário
  }
  // Enviar dados via AJAX
  const xhr = new XMLHttpRequest();
  xhr.open("POST", "../controllers/cadastrarConta.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      if (xhr.responseText === "success") {
        // Limpar os campos após o envio bem-sucedido
        loginInput.value = "";
        senhaInput.value = "";
        nomeInput.value = "";

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

  xhr.send("login=" + login + "&senha=" + senha + "&nome=" + nome);
}
