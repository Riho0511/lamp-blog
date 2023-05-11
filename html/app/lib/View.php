<?php

namespace App\lib;

class View {
    public static function view($path) {
        $rootpath = __DIR__ . '/../../resources/page/';

        switch ($path) {
            case 'login':
                require $rootpath . 'auth/login.php';
                break;
            case 'register':
                require $rootpath . 'auth/register.php';
                break;
            case 'index':
                require $rootpath . 'posts/index.php';
                break;
            case 'show':
                require $rootpath . 'posts/show.php';
                break;
            case 'create':
                require $rootpath . 'posts/create.php';
                break;
            case 'edit':
                require $rootpath . 'posts/edit.php';
                break;
            default:
                echo '表示するものがありません。';
                break;
        }
    }
}
?>