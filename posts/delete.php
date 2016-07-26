<?php require_once(__DIR__ . "/../includes/functions.php"); ?>
<?php require_once(__DIR__ . "/../includes/config.php"); ?>
<?php
$id = $_GET["id"];

if(deletePost($id)){
    header("Location: index.php");
} else {
    header("Location: ?error=Couldn't delete page");
}




?>
