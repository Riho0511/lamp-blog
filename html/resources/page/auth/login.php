<?php

$errors = array_key_exists('errors', $_SESSION) ? $_SESSION['errors'] : [];
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
        <div class="login">
            <h1>Sign In</h1>
            <form method="post">
                <div>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" />
                </div>
                <div>
                    <label for="password">パスワード</label>
                    <input type="password" name="password" id="password" />
                </div>
                <button>送信</button>
            </form>
            <?php
                foreach ($errors as $error) {
                    echo '<p class="error">' . $error . '</p>';
                }
            ?>
            <p><a href="page/register.php">アカウントをお持ちでない方はこちら</a></p>
        </div>
    </div>
</body>
</html>