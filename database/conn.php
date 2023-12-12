<?php

$hostname = 'localhost';
$database = 'to-do-list';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}