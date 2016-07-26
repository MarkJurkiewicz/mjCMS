<?php
/**
 * made Class of DB for easier DB access
 *
 */

class DB
{
    private static $conn;

    public static function getConnect()
    {
        if(!self::$conn)
        {
            $connectStr = "mysql:dbname=".DB_NAME.";host=".DB_HOST."";
            self::$conn = new PDO ($connectStr, DB_USER, DB_PASS);
        }
        return self::$conn;
    }
}

function findUserById($username)
{

    $pdo = DB::getConnect();

    $sql = "SELECT * FROM users WHERE USERNAME = :username";

    $stmt = $pdo->prepare($sql);

    $exec = $stmt->execute([
        ":username" => $username
    ]);

    if(!$exec)
    {
        print_r($stmt->errorInfo());
        exit("An error occured executing statement");
    }

    $result = $stmt->fetchAll();

    return $result;
}

function loginUser($user)
{
    startSession();

    $_SESSION["ID"] = $user["ID"];
    $_SESSION["USERNAME"] = $user["USERNAME"];

    return $_SESSION["USERNAME"] && $_SESSION["ID"];
}

function startSession()
{
    if(session_status() === PHP_SESSION_NONE)
    {
        session_start();
    }
}

function validateLogin($details)
{
    $toBeValidated = ["username", "password"];
    $errors = [];

    foreach($toBeValidated as $input)
    {
        if(!isset($details[$input]) || strlen(trim($details[$input])) === 0){
            $errors[$input] = "$input cannot be empty";
        }
    }
    if(count($errors) !== 0)
    {
        return [false, $errors];
    }

    return [true, $errors];
}

function returnPostError()
{
    $errorString = "";

    if(isset($_GET["error"])){
        if(is_array($_GET["error"])){
            if(is_array($_GET["error"])){
                foreach($_GET["error"] as $error){
                    $errorString =
                        $errorString . "<p><span class='label label-danger'>{$error}</span></p>";
                }
            }
        } else {
            $error = $_GET["error"];
            $errorString = "<p><span class='label label-danger'>{$error}</span></p>";
        }
    }
    return $errorString;
}

function getPosts()
{
    $pdo = DB::getConnect();

    $sql = "SELECT id, title, body FROM post";

    $result = $pdo->query($sql);

    return $result;
}

function createPost($data)
{
    $pdo = DB ::getConnect();

    $sql = "INSERT INTO post (title, body, created_at) VALUES(:title, :body, :published)";

    $stmt = $pdo->prepare($sql);

    $inserted = $stmt->execute([
        ":title"=> $data["title"],
        ":body" => $data["body"],
        ":published" => $data["created_at"]
    ]);

    return $inserted;
}

function editPost($id, $data)
{
    $pdo = DB::getConnect();

    $sql = "UPDATE post SET title = :title, body = :body, created_at = :published WHERE id = :id";

    $stmt = $pdo->prepare($sql);

    $edited = $stmt->execute([
        ":id" => $id,
        ":title" => $data["title"],
        ":body" => $data["body"],
        ":published" => $data["created_at"]
    ]);

    return $edited;
}


function getPost($id)
{
    $pdo = DB::getConnect();

    $sql = "SELECT * FROM post WHERE id = :id";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        ":id" => $id
    ]);

    $row = $stmt->fetch();

    return $row;
}

function deletePost($id)
{
    $pdo = DB::getConnect();

    $sql = "DELETE FROM post WHERE id = :id";

    $stmt = $pdo->prepare($sql);

    $deleted = $stmt->execute([
        ":id"=> $id
    ]);

    return $deleted;
}

function blockEntity()
{
    startSession();

    if (!isset($_SESSION["ID"]))
    {
        header("Location: ../login.php?message=You don't have access to that page.Please login!");
        }
    }