<?php

include '../model/config.php';

if (isset($_POST['login']) && isset($_POST['senha'])) {
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    $query = 'SELECT * FROM login_acesso WHERE login = ? AND senha = ?';
    $stmt = $dbConnection->prepare($query);

    if ($stmt) {
        $stmt->bind_param('ss', $login, $senha);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            header('Location: ../view/menu.php');
            exit;
        } else {
            echo 'Login falhou. Verifique suas credenciais.';
        }

        $dbConnection->close();
    } else {
        throw new Exception('Error in query preparation: '.$dbConnection->error);
    }
}