<?php

namespace App\Controllers;

use App\lib\View;

class PostController {

    // 一覧表示
    public function index() {
        return View::view('index');
    }

    // 詳細表示
    public function show($id) {
        return View::view('show');
    }

    // 作成
    public function create() {
        return View::view('create');
    }

    // 保存
    public function store() {
        echo '保存';
    }

    // 編集
    public function edit($id) {
        return View::view('edit');
    }

    // 更新
    public function update($id) {
        echo '更新';
    }

    // 削除
    public function destroy($id) {
        echo '削除';
    }
}
?>