<?php require_once("includes/functions.php"); ?>
<?php require_once("includes/header.php"); ?>
    <h2>Login</h2>
    <div class="">
        <?php echo returnPostError(); ?>
    </div>
    <form class="" action="process_login.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" value="">
<div>
    <label for="password">
        Password:
    </label>
    <input type="password" id="password" name="password">
</div>
<input type="submit" name="submit" value="Login">
    </form>
<?php require_once("includes/footer.php"); ?>