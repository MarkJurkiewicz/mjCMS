<?php
require_once(__DIR__ . "/../includes/config.php");
require_once(__DIR__ . "/../includes/functions.php");
require_once(__DIR__."/../includes/header.php");
blockEntity();
$user = getUser($_GET["ID"]);
?>
    <h2>Edit User</h2>
    <div>
        <?php echo returnPostError(); ?>
    </div>
    <form action="process_edit_user.php" method="post">
        <input type="hidden" name="ID" value="<?php echo $user["ID"]; ?>">
        <div class="form-group">
            <label for="USERNAME">Username</label>
            <input class="form-control" type="text" name="USERNAME" id="USERNAME" value="<?php echo $user["USERNAME"]; ?>">
        </div>
        <div class="form-group">
            <label for="first_name">First Name</label>
            <input class="form-control" type="text" name="first_name" id="first_name" value="<?php echo $user["first_name"]; ?>">
        </div>
        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input class="form-control" type="text" name="last_name" id="last_name" value="<?php echo $user["last_name"]; ?>">
        </div>
        <div class="form-group">
            <input type="submit" value="Update User">
        </div>
    </form>
<?php
require_once(__DIR__."/../includes/footer.php");
?>