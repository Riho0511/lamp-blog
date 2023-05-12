<?php

namespace App\Requests;

use App\lib\Redirect;

class Request {

    private const RULE = ['title' => 'タイトル', 'body' => '内容', 'email' => 'Email', 'password' => 'パスワード'];

    // POSTメソッド＆ステータスコード200のリクエストかチェック
    public static function request_check() {
        $status_code = http_response_code();
        $method = strtoupper($_SERVER['REQUEST_METHOD']);

        return $method !== 'POST' || $status_code !== 200;
    }

    // バリデーションチェック
    public static function validate($uri) {
        if (self::request_check()) Redirect::to($uri);

        $validate_error = false;
        $errors = [];
        
        // バリデーションチェック
        foreach ($_POST as $key => $value) {
            if (mb_strlen($value) === 0) {
                $validate_error = true;
                array_push($errors, self::RULE[$key] . 'を入力してください');
            }
        }
        
        // エラーメッセージのセット
        $_SESSION['errors'] = empty($errors) ? [] : $errors;

        if ($validate_error) Redirect::to($uri);
    }
}
?>