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
  formData.append("id fk_produto", productId); // Usando o nome correto, que é "id"

  deleteRequest.send(formData);
}
