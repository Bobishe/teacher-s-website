<?php
require_once '../scripts/connect.php';


// Выбор всех записей из таблицы
$sql = "SELECT * FROM files";
$result = $conn->query($sql);

// Получение всех строк
$rows = array();
while ($row = $result->fetch_assoc()) {
    $rows[] = $row;
}


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="../assest/style/achive.css">
    <link rel="stylesheet" href="../node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../node_modules/aos/dist/aos.css"/>

    <link rel="stylesheet" href="../assest/lib/css/bootstrap.min.css">
    <script src="../assest/lib/js/bootstrap.min.js"></script>

    <title>Учебные материалы</title>
</head>
<body>

<header>
    <div class="header">
        <div class="container">
            <div class="inner">
                <div class="header-color">
                    <ul>
                        <li><a href="../index.php">Главная</a></li>
                        <li><a href="achive.html">Достижения</a></li>
                        <li><a href="files.php">Учебные материалы</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="container promo">
        <div class="promo-text">
            <h1 data-aos="fade-up" data-aos-delay="200"
                style="text-align: center; font-size: 42px; padding-bottom: 70px;">Учебные материалы</h1>
            <h4 data-aos="fade-up" data-aos-delay="400" style="text-align: center">Загрузите образовательные ресурсы для
                эффективного обучения, чтобы улучшить свои навыки с помощью моих подробных учебных материалов. </h4>
        </div>
    </div>
</header>

<div class="container mt-5 mb-5">
    <div class="accordion" id="accordionPanelsStayOpenExample" data-aos="fade-left" data-aos-delay="200">
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                        aria-controls="panelsStayOpen-collapseOne">
                    <strong style="padding-right: 6px;font-size: 24px;">Учебные материалы по Аэробике</strong>
                </button>
            </h2>
            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                 aria-labelledby="panelsStayOpen-headingOne">
                <div class="accordion-body" data-aos="fade-left" data-aos-delay="200">

                    <ul>
                        <?php

                        // Первый перебор массива
                        foreach ($rows as $row) {
                            if ($row['category'] == 1) {
                                echo '<div class="music_list"><li style="font-size: 22px; padding-right: 10px;">' . $row['file_name'] . '</li> 
                                      <a type="button" class="btn btn-primary" href="../scripts/download.php?file_url=' . urlencode($row['path']) . '">Скачать файл</a></div>';
                            }
                        }


                        ?>
                    </ul>


                </div>
            </div>
        </div>
        <div class="accordion-item" data-aos="fade-left" data-aos-delay="400">
            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseTwo">
                    <strong style="padding-right: 6px;font-size: 24px;">Учебные материалы по Степ - Аэробике</strong>
                </button>
            </h2>
            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                 aria-labelledby="panelsStayOpen-headingTwo">
                <div class="accordion-body">
                    <ul>
                        <?php
                        // Первый перебор массива
                        foreach ($rows as $row) {
                            if ($row['category'] == 2) {
                                echo '<div class="music_list"><li style="font-size: 22px; padding-right: 10px;">' . $row['file_name'] . '</li> 
                                      <a type="button" class="btn btn-primary"  href="../scripts/download.php?file_url=' . urlencode($row['path']) . '">Скачать файл</a></div>';
                            }
                        }

                        ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="accordion-item" data-aos="fade-left" data-aos-delay="600">
            <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseThree">
                    <strong style="padding-right: 6px; font-size: 24px;">Учебные материалы по Силовой
                        тренировке</strong>
                </button>
            </h2>
            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                 aria-labelledby="panelsStayOpen-headingThree">
                <div class="accordion-body">
                    <ul>
                        <?php

                        // Первый перебор массива
                        foreach ($rows as $row) {
                            if ($row['category'] == 3) {
                                echo '<div class="music_list"><li style="font-size: 22px; padding-right: 10px;">' . $row['file_name'] . '</li> 
                                      <a type="button" class="btn btn-primary"  href="../scripts/download.php?file_url=' . urlencode($row['path']) . '">Скачать файл</a></div>';
                            }
                        }

                        ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="accordion-item" data-aos="fade-left" data-aos-delay="800">
            <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseFour">
                    <strong style="padding-right: 6px;font-size: 24px;">Учебные материалы по Стретчингу</strong>
                </button>
            </h2>
            <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse"
                 aria-labelledby="panelsStayOpen-headingFour">
                <div class="accordion-body">
                    <ul>
                        <?php

                        // Первый перебор массива
                        foreach ($rows as $row) {
                            if ($row['category'] == 4) {
                                echo '<div class="music_list">
<li style="font-size: 22px; padding-right: 10px;">' . $row['file_name'] . '</li> 
                                      <a type="button" class="btn btn-primary"  href="../scripts/download.php?file_url=' . urlencode($row['path']) . '">Скачать файл</a></div>
                                      </div>
                                      ';
                            }
                        }

                        ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="accordion-item" data-aos="fade-left" data-aos-delay="1000">
            <h2 class="accordion-header" id="panelsStayOpen-headingFive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseFive">
                    <strong style="padding-right: 6px;font-size: 24px;">Музыка</strong>

                </button>
            </h2>
            <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse"
                 aria-labelledby="panelsStayOpen-headingFive">
                <div class="accordion-body">
                    <ul class="music_ul">

                        <?php

                        // Первый перебор массива
                        foreach ($rows as $row) {
                            if ($row['category'] == 5) {
                                echo '<div class="music_list">
<li style="font-size: 22px; padding-right: 10px;padding-top: 6px;">' . $row['file_name'] . '</li> 
                                        <audio controls>
                                             <source src="' . $row['path'] . '" type="audio/mpeg">
                                             Ваш браузер не поддерживает элемент audio.
                                        </audio>
                                        </div>
                                       
                                    ';
                            }
                        }

                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="footer">
    <div class="footer_content">
        <div class="footer-ul">
            <ul >
                <li data-aos="fade-left" data-aos-delay="200"><a href="../index.php">Главная</a> </li>
                <li data-aos="fade-left" data-aos-delay="400"><a href="achive.html">Достижения</a> </li>
                <li data-aos="fade-left" data-aos-delay="800"><a href="files.php">Учебные материалы</a></li>
            </ul>
        </div>

        <a href="https://vk.com/id21505168" data-aos="fade-right" data-aos-delay="0">
            <div class="vk"></div>
        </a>


    </div>
</div>


<script src="../assest/scripts/scripts.js">
</script>
<script src="../node_modules/aos/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</body>

</html>
