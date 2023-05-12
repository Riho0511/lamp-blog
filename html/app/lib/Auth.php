<?php

namespace App\lib;

use App\lib\Redirect;

class Auth {

    // 認証しているかどうか
    public static function is_auth() {
        session_start();
        return empty($_SESSION['user_id']);
    }

    // 必要に応じてリダイレクト
    public static function check() {
        if ($_SERVER['REQUEST_URI'] === '/login') {
            if (!self::is_auth()) Redirect::to('/');
        } else {
            if (self::is_auth()) Redirect::to('/login');
        }
    }
}
?>