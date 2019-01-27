<?php
require_once "config.php";

session_start();

if (!$_SESSION["logged_in"]) {
    header("Location: /");
}
?>
<!DOCTYPE html>
<html lang="en">
<head preifx="og: http://ogp.me/ns/website#">
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

    <link rel="stylesheet" href="https://d1azc1qln24ryf.cloudfront.net/114779/Socicon/style-cf.css?9ukd8d">

    <link rel="stylesheet" href="./styles/main.css">
    <link rel="stylesheet" href="./styles/card.css">
    <link rel="stylesheet" href="./styles/contacts.css">
    <link rel="stylesheet" href="./styles/nav.css">
    <link rel="stylesheet" href="./styles/progress-bar.css">
    <link rel="stylesheet" href="./styles/carousel.css">
    <link rel="stylesheet" href="./styles/animations.css">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js"></script>
    <title>My CV</title>
</head>
<body>
    <div class="container">
        <header class="header">
            <video class="image--round" src="./assets/wink.mp4" width="150" id="title-image"></video>
            <h1 class="page-title">Кристиян Йочев</h1>
        </header>
        
        <div class="card" id="main-content">
            <nav class="nav-container">
                <a href="#personal-info" class="navlink active">Повече за мен</a>
                <a href="#technical-skills" class="navlink">Технически умения</a>
                <a href="#personal-projects" class="navlink">Лични проекти</a>
                <a href="#hackathons" class="navlink">Участия в хакатони</a>

                <a href="/logout.php" class="navlink--ext">Излез</a>
            </nav>
            <section class="card__section active" id="personal-info">
                <h2 class="section__title">Контакти</h2>
                <div class="contacts">
                    <div class="contacts__left">
                        <h3 class="contacts__contact" id="phone-contact">
                            Тел.:<span class="contact__text">+359 882 111 029</span>
                        </h3>
        
                        <h3 class="contacts__contact" id="phone-contact">
                            Адрес:<span class="contact__text">гр. София, кв. Малинова долина, ул. 2-ра №10А</span>
                        </h3>
                        
                        <h3 class="contacts__contact" id="mail-contact">
                            <span class="contact__icon socicon-mail"></span> <span class="contact__text">kris.yochev@gmail.com</span>
                        </h3>
                    </div>
                    
                    <div class="contacts__right">
                        <a href="https://www.facebook.com/kris.yochev">
                            <h3 class="contacts__contact" id="facebook-contact">
                                <span class="contact__icon socicon-facebook"></span> <span class="contact__text">Kris Yochev</span>
                            </h3>
                        </a>
        
                        <a href="https://join.skype.com/invite/p8DfjzNtz3Bf">
                            <h3 class="contacts__contact" id="skype-contact">
                                <span class="contact__icon socicon-skype"></span> <span class="contact__text">kristyanyochev</span>
                            </h3>
                        </a>
                        
                        <a href="https://github.com/kristyanYochev">
                            <h3 class="contacts__contact" id="github-contact">
                                <span class="contact__icon socicon-github"></span> <span class="contact__text">kristyanYochev</span>
                            </h3>
                        </a>
                        
                        <a href="https://twitter.com/KrisYochev">
                            <h3 class="contacts__contact" id="twitter-contact">
                                <span class="contact__icon socicon-twitter"></span> <span class="contact__text">@KrisYochev</span>
                            </h3>
                        </a>
                    </div>
                </div>
                <h2 class="section__title">
                    Повече за мен
                </h2>
                <p class="section__text">
                    <div class="video-container">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/0HD7NV5jkiA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </p>
            </section>
            <section class="card__section" id="technical-skills">
                <h2 class="section__title">
                    Технически умения
                </h2>
                <p class="section__text">
                    <?php
                    $stmt = $db->query("SELECT * FROM tech_skills");
                    while ($skill = $stmt->fetch()) {
                        echo "<h3>" . $skill["name"] . "</h3>";
                        echo "<div class=\"progress-bar\">";
                        echo    "<div style=\"--fill-percentage: " . $skill['percentage'] . "%;\"></div>";
                        echo "</div>";
                        echo $skill["description"];
                    }
                    ?>
                </p>
            </section>
            <section class="card__section" id="personal-projects">
                <h2 class="section__title">
                    Лични проекти
                </h2>
                <p class="section__text">
                    <ul>
                    <?php
                    $stmt = $db->query("SELECT * FROM project");
                    while ($project = $stmt->fetch()) {
                        echo "<li>";
                        echo "<h3>" . $project["name"] . "</h3>";
                        echo "<p>" . $project["description"] . "<br>";
                        if ($project['github']) {
                            echo "Github: <a href=\"" . $project['github'] . "\">Тук</a> <br>";
                        }

                        if ($project['live_demo']) {
                            echo "Live Demo: <a href=\"" . $project['live_demo'] . "\">Тук</a> <br>";
                        }

                        switch($project['media_type']) {
                            case "video":
                                echo "<div class=\"video-container\">";
                                echo "<iframe width=\"560\" height=\"315\" src=\"" . $project['media_url'] . "\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>";
                                echo "</div>";
                            break;
                            case "carousel":
                                echo "<div class=\"carousel\">";
                                $urls = explode(";", $project['media_url']);
                                foreach ($urls as $url) {
                                    echo "<div class=\"carousel__slide\">";
                                    echo "<img src=\"$url\" class=\"carousel__image\">";
                                    echo "</div>";
                                }
                            break;
                        }

                        echo "</p>";
                    }
                    ?>
                    </ul>
                </p>
            </section>
            <section class="card__section" id="hackathons">
                <h2 class="section__title">
                    Участия в хакатони
                </h2>
                <p class="section__text">
                    <ul>
                        <?php
                        $stmt = $db->query("SELECT * FROM hackathons");
                        while ($hackathon = $stmt->fetch()) {
                            echo "<h3>" . $hackathon['name'] . "</h3>";
                            echo "<p>" . $hackathon['description'] . "</p>";
                            
                            switch($hackathon['media_type']) {
                                case "video":
                                    echo "<div class=\"video-container\">";
                                    echo "<iframe width=\"560\" height=\"315\" src=\"" . $hackathon['media_url'] . "\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>";
                                    echo "</div>";
                                break;
                                case "carousel":
                                    echo "<div class=\"carousel\">";
                                    $urls = explode(";", $hackathon['media_url']);
                                    foreach ($urls as $url) {
                                        echo "<div class=\"carousel__slide\">";
                                        echo "<img src=\"$url\" class=\"carousel__image\">";
                                        echo "</div>";
                                    }
                                break;
                            }
                        }
                        ?>
                    </ul>
                </p>
            </section>
        </div>
        <footer>
            Designed by Kristyan Yochev 2019
        </footer>
    </div>
    <script src="/scripts/navigation.js"></script>
    <script src="/scripts/carousel.js"></script>
    <script src="/scripts/easter_egg.js"></script>
</body>
</html>