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
