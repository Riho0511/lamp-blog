<?php

namespace App\lib;

class Redirect {
    public static function to($uri) {
        header('Location: http://' . $_SERVER['SERVER_NAME'] . ':8080' . $uri);
        exit();
    }
}
?>