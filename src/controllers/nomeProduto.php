<?php

include '../model/config.php';

$query = 'SELECT nome, id FROM cadastrar_produto';
$resultProdutos = $dbConnection->query($query);

$productData = [];

if ($resultProdutos->num_rows > 0) {
    while ($row = $resultProdutos->fetch_assoc()) {
        echo '<option value="'.$row['nome'].'">'.$row['nome'].'</option>';
    }
}
$dbConnection->close();

header('Content-Type: application/json');
echo json_encode($productData);
