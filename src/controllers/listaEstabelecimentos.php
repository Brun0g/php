<?php

include '../model/config.php';

<<<<<<< HEAD
$query = 'SELECT id, nome_fantasia, endereco, cidade, numero_lojas FROM cadastrar_estabelecimentos';
=======
$query = 'SELECT id AS fk_estabelecimento, nome_fantasia, endereco, cidade, numero_lojas FROM cadastrar_estabelecimentos';
>>>>>>> 4d7aa8813d3ecd820729eaaf086619aa7edc23fa
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
