<?php require_once(__DIR__. "/../includes/header.php"); ?>
<?php require_once(__DIR__ . "/../includes/functions.php"); ?>
<?php require_once(__DIR__ . "/../includes/config.php"); ?>

<h2>Add Page</h2>
<div>
    <?php echo returnPageError(); ?>
</div>
<form action="process_add.php" method="post">
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control" value="">
    </div>
    <div class="form-group">
        <label for="body">Body</label>
        <input type="text" name="body" id="body" class="form-control" value="">
    </div>
    <div class="form-group">
        <label for="published">Publish?</label>
        <input type="checkbox" name="published" id="published" value="1">
    </div>
    <div class="form-group">
        <label for="title">Title</label>
        <input type="submit" name="title" id="title" class="form-control" value="Create">
    </div>

</form>

<?php require_once(__DIR__."/../includes/footer.php"); ?>
