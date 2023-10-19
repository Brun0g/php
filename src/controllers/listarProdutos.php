<?php

include '../model/config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete_product'])) {
    // Lidar com a exclusão do produto
    $product_id = $_POST['product_id'];

    // Crie uma consulta para excluir o produto com base no ID
    $delete_query = "DELETE FROM cadastrar_produto WHERE id = $product_id";

    if (mysqli_query($dbConnection, $delete_query)) {
        echo '<div class="success">Produto excluído com sucesso.</div>';
    } else {
        echo '<div class="error">Erro ao excluir o produto: '.mysqli_error($dbConnection).'</div>';
    }
}

// Realizar uma consulta para listar todos os produtos
$query = 'SELECT * FROM cadastrar_produto';
$result = mysqli_query($dbConnection, $query);

if ($result) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<h2>Nome: '.$row['nome'].'</h2>';
            echo '<p>Marca: '.$row['marca'].'</p>';
            echo '<p>Quantidade: '.$row['quantidade'].'</p>';
            // Adicione um botão de exclusão com um formulário para cada produto
            echo '<form method="POST">';
            echo '<input type="hidden" name="product_id" value="'.$row['id'].'">';
            echo '<input type="submit" name="delete_product" value="Excluir">';
            echo '</form>';
            echo '<hr>';
        }
    } else {
        echo 'Nenhum produto encontrado.';
    }
} else {
    echo 'Erro na consulta: '.mysqli_error($dbConnection);
}

mysqli_free_result($result);
mysqli_close($dbConnection);
