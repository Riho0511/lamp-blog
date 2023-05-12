<?php

namespace App\Requests;

use App\lib\Redirect;

define('ATTRIBUTES', ['title' => 'タイトル', 'body' => '内容']);

class PostRequest {

    // POSTメソッド＆ステータスコード200のリクエストかチェック
    public static function request_check() {
        $status_code = http_response_code();
        $method = strtoupper($_SERVER['REQUEST_METHOD']);

        return $method !== 'POST' || $status_code !== 200;
    }

    public static function validate($uri) {
        if (self::request_check()) Redirect::to($uri);

        $validate_error = false;
        $errors = [];
        
        foreach ($_POST as $key => $value) {
            if (mb_strlen($value) === 0) {
                $validate_error = true;
                array_push($errors, ATTRIBUTES[$key] . 'を入力してください');
            }
        }

        session_start();
        $_SESSION['errors'] = empty($errors) ? [] : $errors;
    }
}
?>