<?php include('./app/pdo.php'); ?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <title>PHP勉強</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./public/css/style.css">
</head>
<body>
    <!-- ヘッダー -->
    <?php include('./resources/layouts/header/index.php'); ?>

    <!-- コンテンツ -->
    <?php include('./resources/page/login.php'); ?>

    <!-- フッター -->
    <?php include('./resources/layouts/footer/footer.php'); ?>
</body>
</html>