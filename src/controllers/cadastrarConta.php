<?php

include '../model/config.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $nome = $_POST['nome'];

    $query = 'INSERT INTO login_acesso (login, senha, nome) VALUES (?, ?, ?)';

    $stmt = $dbConnection->prepare($query);

    if ($stmt) {
        $stmt->bind_param('sss', $login, $senha, $nome);

        if ($stmt->execute()) {
            header('Location: ../view/partials/login/login.php');
        } else {
            echo 'Erro ao cadastrar a conta: '.$stmt->error;
        }

        $stmt->close();
    } else {
        echo 'Erro na preparação da consulta: '.$dbConnection->error;
    }
    $dbConnection->close();
}
