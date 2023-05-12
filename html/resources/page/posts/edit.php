<?php

$errors = array_key_exists('errors', $_SESSION) ? $_SESSION['errors'] : [];
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
        <h1>ブログ作成</h1>
        <form action=<?php echo "/posts/" . $post['id'] . "/update"; ?> method="post">
            <div>
                <label for="title">タイトル</label>
                <input type="text" name="title" id="title" value=<?php echo $post['title']; ?> />
            </div>
            <div>
                <label for="body">内容</label>
                <textarea type="text" name="body" id="body">
                    <?php echo $post['body']; ?>
                </textarea>
            </div>
            <button>保存</button>
        </form>
        <?php
            foreach ($errors as $error) {
                echo '<p class="error">' . $error . '</p>';
            }
        ?>
        <a href=<?php echo "/posts/" . $post['id']; ?>>戻る</a>
    </div>
</body>
</html>