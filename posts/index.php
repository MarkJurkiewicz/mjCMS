<?php require_once(__DIR__ . "/../includes/config.php"); ?>
<?php require_once(__DIR__ . "/../includes/functions.php"); ?>
<?php require_once(__DIR__. "/../includes/header.php"); ?>
<?php $posts = getPages(); ?>
    <h2>Posts</h2>
    <div class="posts">
        <?php foreach($posts as $post): ?>
<!--            --><?php //var_dump($posts); ?>
            <p><?php echo $post["title"]; ?></p>
        <?php endforeach; ?>
    </div>
<?php require_once(__DIR__."/../includes/footer.php"); ?>
