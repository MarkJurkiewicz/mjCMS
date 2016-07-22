<?php
require_once("includes/config.php");
require_once("includes/functions.php");

$username = $_POST["username"];
$password = $_POST["password"];

$val = validateLogin($_POST);

if(!$val[0]){
    $error = http_build_query(array("error" => $val[1]));
    header("Location: index.php?".$error);
    exit;
}
$user = findUserById($username);

if(count($user) > 1)
    exit("This name already exists");

if(count($user) === 0 || !password_verify($password, $user[0]["password"] )){
    exit("Username or password is invalid");
}

$user = $user[0];

if(loginUser($user)){
//    echo "User is Logged in";
    header("Location: posts/index.php");
} else {
    echo "Couldn't log in user";
}
?>