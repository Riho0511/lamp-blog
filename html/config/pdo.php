<?php

require 'config.php';

function db() {
    
    try {
        $pdo = 'mysql:dbname=' . DB_NAME . ';port=' . DB_PORT . ';charset=utf8mb4;host=' . DB_HOST;
        return $db = new PDO($pdo, DB_USER, DB_USER);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

?>