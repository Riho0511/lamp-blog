<?php


namespace App\Models;

require __DIR__ . '../../../config/pdo.php';

class Post {

    // 投稿の一覧取得
    public static function get_posts() {
        $query = 'SELECT * FROM posts';

        $result = db()->query($query);

        if ($result === false) echo '読み取り失敗';

        return $result->fetchAll(\PDO::FETCH_ASSOC);
    }
}
?>