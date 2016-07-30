<?php require_once(__DIR__ . "/../includes/config.php"); ?>
<?php require_once(__DIR__ . "/../includes/functions.php"); ?>
<?php blockEntity(); ?>
<?php

$id = $_POST["id"];

if(isset($_POST["published"])){
    $_POST["published"] = 1;
} else {
    $_POST["published"] = 0;
 }

if(editPost($id, $_POST)){
    header("Location: edit.php?id={$id}");
} else {
    header("Location: edit.php/id={$id}&error=Couldn't edit  page");
}

?>