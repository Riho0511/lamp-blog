<?php

namespace App\Models;

class Post extends Model {

    // 投稿の一覧取得
    public static function get_posts() {
        $query = 'SELECT * FROM posts';
        $posts = self::db($query)->fetchAll(\PDO::FETCH_ASSOC);
        $GLOBALS['data'] = $posts;
    }

    // 投稿の詳細取得
    public static function get_post($id) {
        $query = "SELECT * FROM posts WHERE id={$id}";
        $post = self::db($query)->fetch(\PDO::FETCH_ASSOC);
        $GLOBALS['data'] = $post;
    }

    // 投稿の保存
    public static function store() {
        $query = "INSERT INTO posts (title, body, user_id) VALUES ('{$_POST['title']}','{$_POST['body']}',1)";
        $result = self::db($query);
    }

    // 投稿の更新
    public static function update($id) {
        $query = "UPDATE posts SET title = '{$_POST['title']}', body = '{$_POST['body']}' WHERE id = {$id}";
        $result = self::db($query);
    }

    // 投稿の削除
    public static function destroy($id) {
        $query = "DELETE from posts WHERE id = {$id}";
        $result = self::db($query);
    }
}
?>