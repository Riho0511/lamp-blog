<?php

namespace App\Controllers;

use App\lib\View;
use App\lib\Redirect;
use App\Models\Post;
use App\Requests\Request;

class PostController extends Controller {

    // 一覧表示
    public function index() {
        Post::get_posts();
        return View::view('index');
    }

    // 詳細表示
    public function show($id) {
        Post::get_post($id);
        return View::view('show');
    }

    // 作成
    public function create() {
        return View::view('create');
    }

    // 保存
    public function store() {
        Request::validate('/posts/create');
        Post::store();

        Redirect::to('/');
    }

    // 編集
    public function edit($id) {
        Post::get_post($id);
        return View::view('edit');
    }

    // 更新
    public function update($id) {
        Request::validate("/posts/{$id}/edit");
        Post::update($id);

        Redirect::to('/');
    }

    // 削除
    public function destroy($id) {
        Post::destroy($id);

        Redirect::to('/');
    }
}
?>