<?php

namespace App\Models;

use App\lib\Redirect;

class User extends Model {

    // ログイン処理
    public static function login() {
        $query = "SELECT * FROM users WHERE email='{$_POST['email']}' AND password='{$_POST['password']}'";
        $post = self::db($query)->fetch(\PDO::FETCH_ASSOC);

        if (gettype($post) === 'array') {
            $_SESSION['user_id'] = $post['id'];
            Redirect::to('/');
        } else {
            $_SESSION['errors'] = 'ユーザー情報がありません。';
            Redirect::to('/login');
        }
    }
}
?>