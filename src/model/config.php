<?php

$dbhost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'sistema_login';

// Configure o tempo limite da sessão antes de iniciar a sessão

try {
    $dbConnection = new mysqli($dbhost, $dbUsername, $dbPassword, $dbName);

    if ($dbConnection->connect_error) {
        throw new Exception('Connection failed: '.$dbConnection->connect_error);
    }
    mysqli_set_charset($dbConnection, 'utf8mb4');
} catch (Exception $e) {
    echo 'Error: '.$e->getMessage();
}
