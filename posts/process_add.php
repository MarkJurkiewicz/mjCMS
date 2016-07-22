<?php require_once(__DIR__ . "/../includes/functions.php"); ?>
<?php require_once(__DIR__ . "/../includes/config.php"); ?>
<?php

if(isset($_POST["published"])){
    $_POST["published"] = 1;
} else {
    $_POST["published"] = 0;
}

if(createPage($_POST)){
    header("Location: index.php");
} else {
    header("Location: add.php?error=Couldn't create post!");
}
?>