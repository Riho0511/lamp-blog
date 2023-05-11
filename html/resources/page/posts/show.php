<?php

$post = $GLOBALS['data'];
?>

<div class="contents">
    <h1>ブログ詳細</h1>
    <div class="post">
        <h2><?php echo $post['title'] ?></h2>
        <p><?php echo $post['body'] ?></p>
        <p><?php echo $post['updated_at'] ?></p>
    </div>
    <a href="/">TOPに戻る</a>
</div>