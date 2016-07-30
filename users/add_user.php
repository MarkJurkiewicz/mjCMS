<?php
require_once(__DIR__ . "/../includes/config.php");
require_once(__DIR__ . "/../includes/functions.php");
require_once(__DIR__."/../includes/header.php");
blockEntity(); ?>
<h2>Add User</h2>
    <div>
        <?php echo returnPostError(); ?>
    </div>
<form action="process_user.php" method="post">
    <div class="form-group">
        <label for="username">Username</label>
        <input class="form-control" type="text" name="username" id="username">
    </div>
    <div class="form-group">
        <label for="first_name">First Name</label>
        <input class="form-control" type="text" name="first_name" id="first_name">
    </div>
    <div class="form-group">
        <label for="last_name">Last Name</label>
        <input class="form-control" type="text" name="last_name" id="last_name">
    </div>
    <div class="form-group">
        <input type="submit" value="Create User">
    </div>
</form>
<?php
require_once(__DIR__."/../includes/footer.php");
?>