<?php

$dbhost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'sistema_login';
try {
    $dbConnection = new mysqli($dbhost, $dbUsername, $dbPassword, $dbName);

    if ($dbConnection->connect_error) {
        throw new Exception('Connection failed: '.$dbConnection->connect_error);
    }
} catch (Exception $e) {
    echo 'Error: '.$e->getMessage();
}