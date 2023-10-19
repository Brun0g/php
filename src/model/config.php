<?php
$dbhost = 'localhost';
$dbUsername = 'root';
$dbPassword = 'z^q*LE682@Ol7RHU3LjCYzg6A@9S7&BC9@vWUgul!xZ%Hd@Y8K';
$dbName = 'sistema_login';
try {
    $dbConnection = new mysqli($dbhost, $dbUsername, $dbPassword, $dbName);

    if ($dbConnection->connect_error) {
        throw new Exception("Connection failed: " . $dbConnection->connect_error);
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
