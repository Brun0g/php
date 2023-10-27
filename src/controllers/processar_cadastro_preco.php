<?php

include '../model/config.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $produto_id = $_POST['produto'];
    $estabelecimento_id = $_POST['estabelecimento'];
    $preco = $_POST['preco'];

    $query = 'INSERT INTO cadastro_preco (produto_id, estabelecimento_id, preco) VALUES (?, ?, ?)';

    $stmt = $dbConnection->prepare($query);

    if ($stmt) {
        $stmt->bind_param('iii', $produto_id, $estabelecimento_id, $preco);
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
