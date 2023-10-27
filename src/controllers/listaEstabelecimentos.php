<?php

include '../model/config.php';

$query = 'SELECT id, nome_fantasia, endereco, cidade, numero_lojas FROM cadastrar_estabelecimentos';
$result = $dbConnection->query($query);

// Preparar um array para armazenar os resultados
$estabelecimentoData = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $estabelecimentoData[] = $row;
    }
}
$dbConnection->close();

header('Content-Type: application/json');
echo json_encode($estabelecimentoData);
