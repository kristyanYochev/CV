<?php
require_once "config.php";

$err = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $stmt = $db->prepare("SELECT password FROM user where email = :email");
    $stmt->bindValue("email", $_POST["email"]);
    $stmt->execute();

    if (!$real_pass_hash = $stmt->fetchColumn()) {  // User doesn't exist
        $err = "No such email!";
    } else {
        $pass_hash = hash_hmac("sha256", $_POST["password"], $secret_key);
        
        if ($pass_hash === $real_pass_hash) {
            header("Location: /home.php");
        } else {
            $err = "Invalid password!";
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
    <form action="/" method="post">
        <input type="text" name="email">
        <input type="password" name="password">
        <input type="submit" value="Submit">
    </form>
<?php
echo $err;
?>
</body>
</html>
