<?php

$posts = $GLOBALS['data'];
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
        <h1>ブログ一覧</h1>
        <a href="/posts/create">ブログ作成</a>
        <div class="posts">
            <?php foreach ($posts as $post) { ?>
                <div class="post">
                    <h2>
                        <a href=<?php echo "/posts/" . $post['id']; ?>>
                            <?php echo $post['title'] ?>
                        </a>
                    </h2>
                    <p><?php echo $post['body'] ?></p>
                    <p><?php echo $post['updated_at'] ?></p>
                </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>