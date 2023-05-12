<?php

require '../vendor/autoload.php';

$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r) {
    $r->get('/', 'App\Controllers\PostController@index');
    $r->get('/posts/{id:\d+}', 'App\Controllers\PostController@show');
    $r->get('/posts/create', 'App\Controllers\PostController@create');
    $r->post('/posts', 'App\Controllers\PostController@store');
    $r->get('/posts/{id:\d+}/edit', 'App\Controllers\PostController@edit');
    $r->post('/posts/{id:\d+}/update', 'App\Controllers\PostController@update');
    $r->post('/posts/{id:\d+}/delete', 'App\Controllers\PostController@destroy');

    $r->get('/login', 'App\Controllers\UserController@view_login');
    $r->post('/login', 'App\Controllers\UserController@login');
    $r->get('/register', 'App\Controllers\UserController@view_register');
    $r->post('/register', 'App\Controllers\UserController@register');
});

$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];
$routeInfo = $dispatcher->dispatch($httpMethod, $uri);
$rootpath = __DIR__ . '/../resources/page/';

switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::FOUND:  // 設定したルーティングの場合
        $handler = $routeInfo[1];
        $targets = explode('@', $handler);
        $class = new $targets[0]();
        $method = $targets[1];
        $vars = $routeInfo[2];
        echo call_user_func_array([$class, $method], $vars);
        break;
    case FastRoute\Dispatcher::NOT_FOUND:  // 設定したルーティングでない場合
        require $rootpath . 'notfound.php';
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:  // HTTPリクエストが間違っている場合
        echo "許可されないHTTPリクエストです。\n";
        break;
    default:
        break;
}