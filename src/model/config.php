<?php

$dbhost = 'localhost';
$dbUsername = 'root';
<<<<<<< HEAD
$dbPassword = 'z^q*LE682@Ol7RHU3LjCYzg6A@9S7&BC9@vWUgul!xZ%Hd@Y8K';
$dbName = 'sistema_login';

// Configure o tempo limite da sessão antes de iniciar a sessão

=======
$dbPassword = '';
$dbName = 'sistema_login';
>>>>>>> 4d7aa8813d3ecd820729eaaf086619aa7edc23fa
try {
    $dbConnection = new mysqli($dbhost, $dbUsername, $dbPassword, $dbName);

    if ($dbConnection->connect_error) {
        throw new Exception('Connection failed: '.$dbConnection->connect_error);
    }
    mysqli_set_charset($dbConnection, 'utf8mb4');
} catch (Exception $e) {
    echo 'Error: '.$e->getMessage();
}
