<?php

use App\Models\Post;

$posts = Post::get_posts();
?>

<div class="contents">
    <h1>ブログ一覧</h1>
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