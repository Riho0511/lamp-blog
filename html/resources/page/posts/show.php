<?php

$post = $GLOBALS['data'];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <title>PHP勉強</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../../css/style.css">
</head>
<body>
    <div class="contents">
        <h1>ブログ詳細</h1>
        <div class="post">
            <h2><?php echo $post['title'] ?></h2>
            <p><?php echo $post['body'] ?></p>
            <p><?php echo $post['updated_at'] ?></p>
        </div>
        <a href="/">TOPに戻る</a>
    </div>
</body>
</html>
