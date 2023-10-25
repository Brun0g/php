<?php

include '../model/config.php';

$queryEstabelecimentos = 'SELECT nome_fantasia, id FROM cadastrar_estabelecimentos';
$resultEstabelecimentos = $dbConnection->query($queryEstabelecimentos);

// Preparar um array para armazenar os resultados
$productData1 = [];

if ($resultEstabelecimentos->num_rows > 0) {
    while ($row = $resultEstabelecimentos->fetch_assoc()) {
        echo '<option value="'.$row['nome_fantasia'].'">'.$row['nome_fantasia'].'</option>';
    }
}
$dbConnection->close();

header('Content-Type: application/json');
echo json_encode($productData1);
