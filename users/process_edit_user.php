<?php
require_once(__DIR__ . "/../includes/config.php");
require_once(__DIR__ . "/../includes/functions.php");
$id = $_POST['ID'];
if(editUser($id, $_POST)){
    $user = getUser($id);
    $_SESSION['USERNAME'] = $user['USERNAME'];
    header("Location: edit_user.php?id={$id}");
} else {
    header("Location: edit_user.php?id={$id}&error=Couldn't update user");
}



