<?php

include '../model/config.php';

$query = 'SELECT nome_fantasia, endereco, cidade, numero_lojas, id FROM cadastrar_estabelecimentos';
$result = $dbConnection->query($query);

// Preparar um array para armazenar os resultados
$estabelecimentoData = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $estabelecimentoData[] = $row;
    }
}

header('Content-Type: application/json');
echo json_encode($estabelecimentoData);