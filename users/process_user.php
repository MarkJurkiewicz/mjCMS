<?php
require_once(__DIR__ . "/../includes/config.php");
require_once(__DIR__ . "/../includes/functions.php");

$_POST["password"] = password_hash($_POST["USERNAME"], PASSWORD_DEFAULT);

if(createUser($_POST))
{
    header("Location: user.php");
} else {
    header("Location: add_user.php?error=Couldn't create user");
}
