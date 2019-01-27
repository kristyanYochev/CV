<?php
require_once "config.php";

$err = "";

$email = $password = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $stmt = $db->prepare("SELECT id FROM user WHERE email = :email");
    $stmt->bindParam("email", $email);
    $stmt->execute();

    if ($stmt->fetch()) {  // Already exists
        $err = "Email already taken!";
    } else {
        if ($password === $_POST["confirm-password"]) {
            $password_hash = hash_hmac("sha256", $password, $secret_key);
    
            $stmt = $db->prepare("INSERT INTO user (email, password) VALUES (:email, :password)");
            $stmt->bindParam("email", $email);
            $stmt->bindParam("password", $password_hash);
            
            if ($stmt->execute()) {
                header("Location: /");
            } else {
                $err = "Something went wrong";
            }
        } else {
            $err = "Passwords do not match";
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

    <meta property="og:title" content="Kristyan Yochev">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://kristyanyochev.github.io/CV/">
    <meta property="og:image" content="https://kristyanyochev.github.io/CV/assets/me.jpg">
    <meta property="og:image:secure_url" content="https://kristyanyochev.github.io/CV/assets/me.jpg">
    <meta property="og:image:alt" content="Снимка на Кристиян Йочев">
    <meta property="og:description" content="Автобиографията на един леко откачен тийнейджър с много амбиции.">
    <meta property="og:locale" content="bg_BG">
    <meta property="fb:app_id" content="234666257473081">

    <link rel="stylesheet" href="./styles/login.css">
    <link rel="stylesheet" href="./styles/card.css">
    <link rel="stylesheet" href="./styles/input.css">

    <title>Regsiter</title>
</head>
<body>
    <div class="container">
        <div class="card" id="main-content">
            <h2 class="section__title">Register</h2>
            <form action="/register.php" method="POST">
                <input class="textfield" type="email" name="email" placeholder="E-mail" value="<?php echo $email; ?>">
                <input class="textfield" type="password" name="password" placeholder="Password" value="<?php echo $password; ?>">
                <input class="textfield" type="password" name="confirm-password" placeholder="Confirm Password">
                
                <span class="error">
                    <?php
                    echo $err;
                    ?>
                </span><br>
                
                <input class="button" type="submit" value="Submit">
                <a class="link" href="/">Already have an account? Log in!</a>
            </form>
        </div>
    </div>
</body>
</html>
