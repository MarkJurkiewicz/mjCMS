<?php require(__DIR__."/includes/functions.php");

startSession();

$_SESSION = [];

session_destroy();

header("Location: login.php");