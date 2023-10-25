<?php

require_once '../model/config.php';

if (isset($_POST['id'])) {
    $estabelecimento_id = $_POST['id'];

    $query = 'DELETE FROM cadastrar_estabelecimentos WHERE id = ?';
    $stmt = $dbConnection->prepare($query);

    if ($stmt) {
        $stmt->bind_param('i', $estabelecimento_id);

        if ($stmt->execute()) {
            echo 'Produto excluído com sucesso.';
        } else {
            echo 'Falha ao excluir o produto: '.$stmt->error;
        }

        $stmt->close();
    } else {
        echo 'Falha ao preparar a consulta.';
    }
    $dbConnection->close();
}
