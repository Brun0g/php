<?php

include '../model/config.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome_fantasia = $_POST['nome_fantasia'];
    $endereco = $_POST['endereco'];
    $cidade = $_POST['cidade'];
    $numero_lojas = $_POST['numero_lojas'];

    $query = 'INSERT INTO cadastrar_estabelecimentos (nome_fantasia, endereco, cidade,numero_lojas ) VALUES (?, ?, ?, ?)';

    $stmt = $dbConnection->prepare($query);

    if ($stmt) {
        $stmt->bind_param('ssi', $nome_fantasia, $endereco, $cidade, $numero_lojas);

        if ($stmt->execute()) {
            echo 'success';
        } else {
            echo 'Erro ao cadastrar o produto: '.$stmt->error;
        }

        $stmt->close();
    } else {
        echo 'Erro na preparação da consulta: '.$dbConnection->error;
    }
    $dbConnection->close();
}
