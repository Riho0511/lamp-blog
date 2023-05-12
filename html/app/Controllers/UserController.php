<?php

namespace App\Controllers;

use App\lib\View;
use App\Requests\Request;
use App\Models\User;

class UserController extends Controller {

    // ログイン画面表示
    public function view_login() {
        return View::view('login');
    }

    // ログイン処理
    public function login() {
        Request::validate('/login');
        User::login();
    }

    // ログアウト
    public function logout() {
        echo 'ログアウト';
    }

    // 新規登録画面表示
    public function view_register() {
        return View::view('register');
    }

    // 新規登録処理
    public function register() {
        echo '新規登録';
    }
}
?>