<?php

include '../model/config.php';

$query = 'SELECT nome, marca, quantidade, id FROM cadastrar_produto';
$result = $dbConnection->query($query);

// Preparar um array para armazenar os resultados
$productData = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $productData[] = $row;
    }
}

header('Content-Type: application/json');
echo json_encode($productData);
