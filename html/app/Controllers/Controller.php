<?php

namespace App\Controllers;

use App\lib\Auth;

class Controller {
    public function __construct() {
        Auth::check();
    }
}
?>