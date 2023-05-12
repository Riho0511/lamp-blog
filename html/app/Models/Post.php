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

    // 投稿の詳細取得
    public static function get_post($id) {
        $query = "SELECT * FROM posts WHERE id ={$id}";

        $result = db()->query($query);

        if ($result === false) echo '読み取り失敗';

        return $result->fetchAll(\PDO::FETCH_ASSOC)[0];
    }

    // 投稿の保存
    public static function store() {
        $title = $_POST['title'];
        $body = $_POST['body'];
        $user_id = 1;

        $query = "INSERT INTO posts (title, body, user_id) VALUES ('{$title}','{$body}',{$user_id})";
        $result = db()->query($query);
        if(!db()->exec($query)){
            $error = db()->errorInfo();
            die($error[2] . '. sql : ' . $query);
        }

        return;
    }

    // 投稿の更新
    public static function update($id) {
        $title = $_POST['title'];
        $body = $_POST['body'];
        
        $query = "UPDATE posts SET title = :title, body = :body WHERE id = :id";
        $stmt = db()->prepare($query);
        $stmt->execute([':title' => $title, ':body' => $body, ':id' => $id]);

        return;
    }
}
?>