<?php

namespace App\Requests;

define('ATTRIBUTES', ['title' => 'タイトル', 'body' => '内容']);

class PostRequest {

    public static function validate() {
        session_start();

        $validate_error = false;
        $errors = [];
        $_SESSION['errors'] = [];

        foreach ($_POST as $key => $value) {
            if (mb_strlen($value) === 0) {
                $validate_error = true;
                array_push($errors, ATTRIBUTES[$key] . 'を入力してください');
            }
        }

        $_SESSION['errors'] = $errors;

        return $validate_error;
    }
}
?>