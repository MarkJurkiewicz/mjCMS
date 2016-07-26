<?php require_once(__DIR__ . "/../includes/config.php"); ?>
<?php require_once(__DIR__ . "/../includes/functions.php"); ?>
<?php blockEntity(); ?>
<?php require_once(__DIR__. "/../includes/header.php"); ?>


<h2>Add Page</h2>
<div>
    <?php echo returnPostError(); ?>
</div>
<form action="process_add.php" method="post">
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control" value="">
    </div>
    <div class="form-group">
        <label for="body">Body</label>
        <textarea name="body" id="body" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label for="created_at">
        <input type="checkbox" name="created_at" id="created_at" value="1">Publish?
        </label>
    </div>
    <div class="form-group">
        <input type="submit" class="form-control" value="Create">
    </div>

</form>

<?php require_once(__DIR__."/../includes/footer.php"); ?>
