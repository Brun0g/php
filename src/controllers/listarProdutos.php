<?php

include '../model/config.php';

<<<<<<< HEAD
$query = 'SELECT nome, marca, quantidade, id FROM cadastrar_produto';
=======
$query = 'SELECT id AS fk_produto, nome, marca, quantidade FROM cadastrar_produto';
>>>>>>> 4d7aa8813d3ecd820729eaaf086619aa7edc23fa
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
