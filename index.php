<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assest/style/index.css">
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="node_modules/aos/dist/aos.css"/>


    <link rel="stylesheet" href="assest/lib/css/bootstrap.min.css">
    <script src="assest/lib/js/bootstrap.min.js"></script>

    <title>Портфолио</title>
</head>
<body>


<header>

    <div class="header">
        <div class="container">
            <div class="inner">
                <div class="header-color">
                    <ul>
                        <li><a href="#about">Обо мне</a> </li>
                        <li><a href="pages/achive.html">Достижения</a></li>
                        <li><a href="pages/files.php">Учебные материалы</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <?php

    session_start();

    if (empty($_SESSION)){
        echo '';
    }else{
        echo '
        <div id="popup" class="popup hidden">
            Сообщение отправлено
        </div>
        ';

    }

    ?>


    <div class="container promo">
        <div class="promo-text">
            <h4 class="h4_content" data-aos="fade-up" data-aos-delay="0">dance teacher</h4>
            <h1 class="h1_content" data-aos="fade-up" data-aos-delay="100">Виктория <br>Московская</h1>
        </div>
    </div>


</header>


<div class="container container2">

    <div class="card1">

        <div class="card_content" data-aos="fade-right" data-aos-delay="500">
            <h4>Клубные танцы</h4><br>
            <p>сочетание элементов электроданса, поппинга, техно и хип-хопа, то есть прыжки, махи ногами и активные
                движения руками</p>
            <div class="button-container">
                <a style="text-decoration: none" href="https://www.youtube.com/playlist?list=PL8ap3V1oYVTTMkUzVk67gZhXdhiTmbKGe" class="custom-button">Подробнее</a>
            </div>
        </div>

        <div class="card_content" data-aos="fade-right" data-aos-delay="800">
            <h4>Хип-хоп</h4><br>
            <p>это молодёжная субкультура, которая предполагает свой стиль не только в музыке и танцах, но и в манере
                одеваться</p>
            <div class="button-container">
                <a style="text-decoration: none" href="https://www.youtube.com/playlist?list=PLErFtW1MXkPHZtKWsynW6rZUzxL4lVQVp" class="custom-button">Подробнее</a>
            </div>
        </div>

        <div class="card_content" data-aos="fade-right" data-aos-delay="1100" id="about">
            <h4>Брейк-данс</h4><br>
            <p>Это не только танец, это спорт, кроме танцевальных движений здесь присутствуют элементы акробатики и
                спортивной гимнастики</p>
            <div class="button-container">
                <a style="text-decoration: none" href="https://www.youtube.com/playlist?list=PLkuG1_JMh1KeT6EpdYIbon3Wbc5HZTFbb" class="custom-button">Подробнее</a>
            </div>
        </div>

    </div>

    <div class="container2_about" >
        <div class="test" data-aos="fade-up" data-aos-delay="200">
            <h1>Немного обо мне</h1>
        </div>
        <div class="stripe_main">
            <div class="stripe" data-aos="fade-up" data-aos-delay="400"></div>
        </div>


        <p data-aos="fade-up" data-aos-delay="600">Я, Шатрова (Московская) Виктория Викторовна, являюсь преподавателем
            отделения "Физическая культура" в Канском
            педагогическом колледже. В своей работе я неизменно стремлюсь к совершенствованию своих профессиональных
            навыков, посещая курсы по аэробике, степ-аэробике, стретчингу, функциональным и силовым тренингам, а также
            мастер-классы по актуальным танцевальным направлениям. Моё жизненное кредо: "человек создан для счастья, как
            птица создана для полёта". Именно поэтому я верю, что каждый из нас обязан жить так, чтобы делать этот мир
            счастливее и добрее не только для себя, но и для окружающих.</p>
    </div>

    <div class="container2_video">
        <h4 style="color: black; font-weight: bold" data-aos="fade-up" data-aos-delay="200">Если хотите так же, то вам ко мне!</h4>
        <button class="video-button" id="videoButton" data-aos="fade-up" data-aos-delay="400">
            <div class="triangle"></div>
        </button>
        <div class="overlay" id="overlay">
            <iframe id="video" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
    </div>


</div>

<!--container3-->


<div class="container3">
    <h1 data-aos="fade-up" data-aos-delay="0">Свяжитесь со мной</h1>
    <div class="stripe_main" >
        <div class="stripe" data-aos="fade-up" data-aos-delay="200" style="background-color: #e7faec"></div>
    </div>
    <div class="container3_con" style="display: flex;
    width: 100%;

    justify-content: space-around;
    align-items: center;">
        <div class="container3_content" id="scroll-box1">
            <div class="contacts" data-aos="fade-up" data-aos-delay="400">
                <h2>Контактная информация</h2>
                <ul>
                    <li><i class="bi bi-house"></i>ㅤㅤул. 40 лет Октября, 65, Канск.</li>
                    <li><i class="bi bi-telephone"></i>ㅤㅤ+7 800 555-35-35</li>
                    <li><i class="bi bi-envelope"></i>ㅤㅤtest@inbox.ru</li>
                    <li><i class="bi bi-globe"></i><a href="https://www.cross-kpk.ru/"> ㅤㅤwww.cross-kpk.ru</a></li>
                </ul>
            </div>
            <div data-aos="fade-up" data-aos-delay="800">
                <form class="contact-form" method="post" action="scripts/send_email.php">
                    <input type="email" id="email" name="email" placeholder="Ваш Email" required>
                    <input type="text" id="name" name="name" placeholder="Имя" required>
                    <input type="tel" id="phone" name="phone" placeholder="Номер телефона" required>
                    <textarea id="message" name="message" placeholder="Сообщение" required></textarea>
                    <button type="submit">Отправить</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="footer">
    <div class="footer_content">
        <div class="footer-ul">
            <ul >
                <li data-aos="fade-left" data-aos-delay="200"><a href="index.php">Главная</a> </li>
                <li data-aos="fade-left" data-aos-delay="400"><a href="pages/achive.html">Достижения</a> </li>
                <li data-aos="fade-left" data-aos-delay="800"><a href="pages/files.php">Учебные материалы</a></li>
            </ul>
        </div>

        <a href="https://vk.com/id21505168" data-aos="fade-left" data-aos-delay="1000"><div class="vk"></div></a>


    </div>
</div>


<script src="assest/scripts/scripts.js">
</script>
<script src="node_modules/aos/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</body>
</html>
