<?php startSession(); ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="/myProjects/mjCMS/assets/main.css" />
    <meta charset="utf-8">
    <title>mj CMS</title>
</head>
<body>
<div class="top-menu">
    <div class="menu-options">

    <a href="/myProjects/mjCMS/login.php">Home</a>
    <?php if(isset($_SESSION["ID"])): ?>
    <a href="/myProjects/mjCMS/posts">View Posts</a>
    <a href="/myProjects/mjCMS/posts/unpublished.php">Unpublished Posts</a>
    <a href="/myProjects/mjCMS/posts/add.php">Create Post</a>
    <a href="/myProjects/mjCMS/users/add_user.php">Create A User</a>
    <a href="/myProjects/mjCMS/users/user.php">Users</a>

    <?php endif; ?>
    <?php if(isset($_SESSION["ID"])): ?>
    <a href="/myProjects/mjCMS/logout.php">Logout</a>
    <?php else: ?>
    <a href="/myProjects/mjCMS/login.php">Login</a>
    <?php endif; ?>
    </div>
</div>
<div>
    <?php echo returnPageMessage(); ?>
</div>
