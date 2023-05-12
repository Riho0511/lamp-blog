<?php

namespace App\Models;

require __DIR__ . '../../../config/config.php';

class Model {
    
    // PDO設定とDBへのアクセス
    public static function access() {
        try {
            $pdo = 'mysql:dbname=' . DB_NAME . ';port=' . DB_PORT . ';charset=utf8mb4;host=' . DB_HOST;
            return $db = new \PDO($pdo, DB_USER, DB_USER);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    // DBにクエリを送る
    public static function db($query) {
        $stmt = self::access()->prepare($query);
        $stmt->execute();

        return $stmt;
    }
}
?>