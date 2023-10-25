<?php

// Inclua o arquivo de conexão com o banco de dados
require_once '../model/config.php';

if (isset($_POST['id'])) {
    $product_id = $_POST['id'];

    // Crie a consulta SQL e prepare-a
    $query = 'DELETE FROM cadastrar_produto WHERE id = ?';
    $stmt = $dbConnection->prepare($query);

    // Verifique se a preparação da consulta foi bem-sucedida
    if ($stmt) {
        // Vincule o parâmetro e execute a consulta
        $stmt->bind_param('i', $product_id);

        if ($stmt->execute()) {
            echo 'Produto excluído com sucesso.';
        } else {
            echo 'Falha ao excluir o produto: '.$stmt->error;
        }

        $stmt->close(); // Feche a declaração após o uso
    } else {
        echo 'Falha ao preparar a consulta.';
    }
    $dbConnection->close();
}