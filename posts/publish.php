<?php
require_once(__DIR__ . "/../includes/config.php");
require_once(__DIR__ . "/../includes/functions.php");
blockEntity();

$id = $_GET["id"];

if(publishPost($id))
{
    header("Location: unpublished.php");
} else {
    header("Location: /posts/unpublished.php?message=Couldn't publish post");
}
