<?php require_once(__DIR__ . "/../includes/config.php"); ?>
<?php require_once(__DIR__ . "/../includes/functions.php"); ?>
<?php blockEntity(); ?>
<?php require_once(__DIR__. "/../includes/header.php"); ?>

<?php $post = getPost($_GET["id"]); ?>
<h2>Edit Page</h2>
<div>
    <?php echo returnPostError(); ?>
</div>
<form action="process_edit.php" method="post">
    <input type="hidden" name="id" value="<?php echo $post['id']; ?>"
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control" value="<?php echo $post['title']; ?> ">
    </div>
    <div class="form-group">
        <label for="body">Body</label>
        <textarea name="body" id="body" class="form-control"><?php echo $post['body']; ?></textarea>
    </div>
    <div class="form-group">
        <label for="created_at">
            <input type="checkbox" name="created_at" id="created_at" value="1"
            <?php if($post["created_at"] == 1) {echo "checked";} ?>
            >  Publish?
        </label>
    </div>
    <div class="form-group">
        <input type="submit" class="form-control" value="Update">
    </div>

</form>

<?php require_once(__DIR__."/../includes/footer.php"); ?>
