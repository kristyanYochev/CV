<?php
require_once "config.php";

$err = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $stmt = $db->prepare("SELECT id FROM user WHERE email = :email");
    $stmt->bindParam("email", $_POST["email"]);
    $stmt->execute();

    if ($stmt->fetch()) {  // Already exists
        $err = "Email already taken!";
    } else {
        $password_hash = hash_hmac("sha256", $_POST["password"], $secret_key);

        $stmt = $db->prepare("INSERT INTO user (email, password) VALUES (:email, :password)");
        $stmt->bindParam("email", $_POST["email"]);
        $stmt->bindParam("password", $password_hash);
        
        if ($stmt->execute()) {
            header("Location: /");
        } else {
            $err = "Somethong went wrong";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/register.php" method="POST">
        <input type="email" name="email">
        <input type="password" name="password">
        <input type="submit" value="Submit">
    </form>
    <?php
echo $err;
    ?>
</body>
</html>