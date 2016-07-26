<?php require_once(__DIR__ . "/../includes/config.php"); ?>
<?php require_once(__DIR__ . "/../includes/functions.php"); ?>
<?php require_once(__DIR__. "/../includes/header.php"); ?>
<?php $posts = getPosts(); ?>
    <h2>Posts</h2>
    <div class="posts">
        <?php foreach($posts as $post): ?>
            <p>
                <span><?php echo $post["title"]; ?></span>
                <a href="edit.php?id=<?php echo $post['id'] ?>">Edit</a>
                <a href="delete.php?id=<?php echo $post['id'] ?>">Delete</a>
            </p>
        <?php endforeach; ?>
    </div>
<?php require_once(__DIR__."/../includes/footer.php"); ?>
