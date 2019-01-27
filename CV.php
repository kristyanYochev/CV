<?php
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
                    <h3>Python</h3>
                    <div class="progress-bar">
                        <div style="--fill-percentage: 95%;"></div>
                    </div>
                    Работил съм предимно с Flask microframework за разработка на Web приложения.
                    Освен него имам опит и с PyQt5.
                    
                    <h3>JavaScript</h3>
                    <div class="progress-bar">
                        <div style="--fill-percentage: 85%;"></div>
                    </div>
                    Използвам го с ReactJS framework за frontend на Web приложения.

                    <h3>HTML5 & CSS3</h3>
                    <div class="progress-bar">
                        <div style="--fill-percentage: 95%;"></div>
                    </div>

                    <h3>C/C++</h3>
                    <div class="progress-bar">
                        <div style="--fill-percentage: 75%;"></div>
                    </div>
                    Използвам ги предимно в Embedded програмиране с Arduino.

                    <h3>SQL</h3>
                    <div class="progress-bar">
                        <div style="--fill-percentage: 80%;"></div>
                    </div>
                </p>
            </section>
            <section class="card__section" id="personal-projects">
                <h2 class="section__title">
                    Лични проекти
                </h2>
                <p class="section__text">
                    <ul>
                        <li>
                            <h3>Code Hub</h3>
                            <p>
                                Code Hub е колаборативен редактор на код, създаден с цел да улесни обучението по програмиране.
                                Проекта беше създаден по време на и за участие в хакатона Hack30xTUES.
                                Той позволява на учениците в реално време да виждат какво прави техният учител, както и обратното.
                                Така те могат да учат без да се налага да си извиват вратовете по всевъзможни начини само за да видят
                                дъската, а после като дойде време за упражненията, учителят може да наблюдава кой пише, кой не, кой има
                                затруднения със някоя задача и може да му/ѝ помогне без да става от компютъра. <br>
                                Github: <a href="https://github.com/SashoStoichkov/Project-Hogwarts">Тук</a> <br>
                                Live Demo: <a href="http://85.196.173.73:5000">Тук</a>
                            </p>
                            <!-- <video width="100%" src="./assets/codehub-demo.mp4" type="video/mp4" controls autoplay></video> -->
                            <div class="video-container">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/zULzGhnWYX0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </li>
                        <li>
                            <h3>World Cup Prediction</h3>
                            <p>
                                Сайт, който предсказва резулататите от световното първенство по футбол с 55% успеваемост. <br>
                                Github: <a href="https://github.com/VIVelev/WorldCup-Prediction">Тук</a>
                            </p>
                        </li>
                        <li>
                            <h3>PPL(A) примерни тестове</h3>
                            <p>
                                Сайт с примерни теоретични тестове за любител пилот на български. Линк: <a href="http://85.196.173.73/">Тук</a>.
                                <div class="carousel" id="ppl-tests">
                                    <div class="carousel__slide active"><img src="./assets/PPLTests/home.png" alt="Home page for PPL tests" class="carousel__image"></div>
                                    <div class="carousel__slide"><img src="./assets/PPLTests/testStart.png" alt="Beginning of test" class="carousel__image"></div>
                                    <div class="carousel__slide"><img src="./assets/PPLTests/testMiddle.png" alt="Middle of a test" class="carousel__image"></div>
                                    <div class="carousel__slide"><img src="./assets/PPLTests/unsolvedQuestions.png" alt="Unsolved Questions" class="carousel__image"></div>
                                    <div class="carousel__slide"><img src="./assets/PPLTests/solvedQuestions.png" alt="Solved Questions" class="carousel__image"></div>
                                </div>
                            </p>
                        </li>
                    </ul>
                </p>
            </section>
            <section class="card__section" id="hackathons">
                <h2 class="section__title">
                    Участия в хакатони
                </h2>
                <p class="section__text">
                    <ul>
                        <li>
                            <h3>HackTUES3 - Трето място + специална награда от Dopamine</h3>
                            <p>
                                Наградата беше спечелена с уеб приложение за редактиране на изображения. Аз работех по сървърната част
                                на проекта (Authentication, File Saving, DB Management, User Accounts) както и помагах с frontend частта.
                                До финала бяха допуснати 6 отбора, от които 3 взеха награди (ние бяхме един от тези 3). Освен третото място,
                                аз спечелих и специална награда от Dopamine - една от фирмите, които спонсорираха събитието.
                            </p>
                            <div class="courousel" id="hacktues3-carousel">
                                <div class="carousel__slide active">
                                    <img src="./assets/hacktues3/award.jpg" alt="Award" class="carousel__image">
                                </div>
                                <div class="carousel__slide">
                                    <img src="./assets/hacktues3/code.jpg" alt="Code" class="carousel__image">
                                </div>
                                <div class="carousel__slide">
                                    <img src="./assets/hacktues3/judges.jpg" alt="Judges" class="carousel__image">
                                </div>
                                <div class="carousel__slide">
                                    <img src="./assets/hacktues3/presenting.jpg" alt="Presenting" class="carousel__image">
                                </div>
                                <div class="carousel__slide">
                                    <img src="./assets/hacktues3/spec_award.jpg" alt="Special award" class="carousel__image">
                                </div>
                            </div>
                        </li>
                        <li>
                            <h3>Hack30xTUES - Специална награда от Cloud Balkan</h3>
                            <p>
                                Наградата беше сепечелена с проекта CodeHub, който може да се види по-горе.
                            </p>
                            <div class="carousel" id="hack30xtues-carousel">
                                <div class="carousel__slide active"><img src="./assets/hack30xtues/award.png" alt="Award" class="carousel__image"></div>
                                <div class="carousel__slide"><img src="./assets/hack30xtues/team.jpg" alt="Team" class="carousel__image"></div>
                            </div>
                        </li>
                        <li>
                            <h3>
                                Smart School 4 Smart School Children - Първо място в категориите "Игри и забавно дигитално учене"
                                и "Приятел иноватор в училище"
                            </h3>
                            <p>
                                За този хакатон аз и моят съотборник създадохме SConnect, което представлява социална мрежа, която
                                позволява да си намираш нови приятели на база интереси.<br>
                                Github: <a href="https://github.com/kristyanYochev/SConnect">Тук</a>
                            </p>
                        </li>
                        <li>
                            <h3>
                                Balkan Hackathon - Финалист
                            </h3>
                            <p>
                                На това събитие трябваше да направим нещо за дигиталното бъдеще в рамките на 24 часа. И нашето решение беше
                                да автоматизираме организацията на файлове, като направим Cloud Storage платформа, която автоматично категоризира
                                файлове спрямо тяхното съдържание. Като дойде време за представянето тя можеше да слага категории на изображения
                                и PDF файлове. Освен това правеше обобщение на текста в PDF файлове, така че да може човек бързо да разбере
                                какво пише в даден документ без да се налага да го отваря и чете целия.
                            </p>
                        </li>
                        <li>
                            <h3>
                                Sports Hackathons - Първо място
                            </h3>
                            <p>
                                Това състезание ни вдъхнови да създадем в рамките на 2 дни платформа за онлайн тренировки. Целта беше да
                                може да си намериш треньор онлайн и той, използвайки нашата платформа, да ти казва какви упражнения по колко
                                пъти и колко серии трябва да правиш, с какво утежнение да го правиш и какво и по колко да ядеш.
                            </p>
                        </li>
                    </ul>
                </p>
            </section>
        </div>
        <footer>
            Designed by Kristyan Yochev 2019
        </footer>
    </div>
    <script src="./scripts/navigation.js"></script>
    <script src="./scripts/carousel.js"></script>
    <script src="./scripts/easter_egg.js"></script>
</body>
</html>