<?php

include '../model/config.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $marca = $_POST['marca'];
    $quantidade = $_POST['quantidade'];

    $query = 'INSERT INTO cadastrar_produto (nome, marca, quantidade) VALUES (?, ?, ?)';

    $stmt = $dbConnection->prepare($query);

    if ($stmt) {
        $stmt->bind_param('ssi', $nome, $marca, $quantidade);

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
