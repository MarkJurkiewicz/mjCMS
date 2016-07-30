<?php
require_once(__DIR__ . "/../includes/config.php");
require_once(__DIR__ . "/../includes/functions.php");
blockEntity();
if(isset($_POST["created_at"]))
{
    $_POST["created_at"] = 1;
} else {
    $_POST["created_at"] = 0;
}

if(createPost($_POST))
{
    header("Location: index.php");
} else {
    header("Location: add.php?error=Couldn't create post!");
}
