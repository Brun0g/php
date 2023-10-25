<?php

include '../model/config.php';

$query = 'SELECT * FROM cadastrar_produto';
$result = $dbConnection->query($query);

// Preparar um array para armazenar os resultados
$productData = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $productData[] = $row;
    }
}
$dbConnection->close();

header('Content-Type: application/json');
echo json_encode($productData);
