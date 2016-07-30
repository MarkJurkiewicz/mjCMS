<?php
require_once(__DIR__ . "/../includes/config.php");
require_once(__DIR__ . "/../includes/functions.php");
blockEntity();
$users = getUsers();
?>
<?php
require_once(__DIR__ . "/../includes/header.php");
?>
<progress value="100" max="100">100%</progress>
<h2>Users</h2>
<div class="">
    <?php echo returnPostError(); ?>
    <div class="users">
        <?php foreach($users as $user): ?>
    <p>
        <span><?php echo $user["USERNAME"]." ". $user["first_name"]. " ". $user["last_name"]; ?></span>
        <a href="edit_user.php?=<?php echo $user['ID']; ?>">Edit</a>
        <a href="delete_user.php?=<?php echo $user['ID']; ?>">Delete</a>

    </p>
    <?php endforeach; ?>
    </div>
</div>
<?php
require_once(__DIR__ . "/../includes/footer.php");
?>