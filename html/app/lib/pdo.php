<?php

try {
    $db = new PDO('mysql:dbname=test_db;port=3306;charset=utf8mb4;host=mysql', 'root', 'root');
} catch (PDOException $e) {
    echo $e->getMessage();
}

?>