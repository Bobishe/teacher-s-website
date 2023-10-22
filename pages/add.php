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


session_start();

// Проверка флага авторизации
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    // Перенаправление на страницу входа
    header('Location: login.php');
    exit();
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

<header style="height: 12vh">
    <div class="header">
        <div class="container">
            <div class="inner">
                <div class="header-color">
                    <ul>
                        <li><a href="../index.php">Главная</a></li>
                        <li><a href="achive.html">Достижения</a></li>
                        <li><a href="files.php">Учебные материалы</a></li>
                        <li><a href="../scripts/logout.php">Выйти</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>


<div class="container" style="height: auto; min-height: 63vh">
    <div class="row">

        <form class="col-5" action="../scripts/upload.php" method="post"
              style="max-width: 500px; margin-left: auto; margin-right: auto; padding-top: 80px;"
              enctype="multipart/form-data">
            <div class="mb-3">
                <label for="1" class="form-label">Название фаила</label>
                <input type="text" name="file_name" class="form-control" id="1">
                <div id="emailHelp" class="form-text">Это название будет отображаться на сайте!</div>
            </div>
            <div class="mb-3">
                <label for="2" class="form-label">Категория</label>
                <select class="form-select" name="category">
                    <option selected>Выберете категорию загружаевомого фаила</option>
                    <option value="1">Аэробика</option>
                    <option value="2">Степ-Аэробика</option>
                    <option value="3">Силовая тренировка</option>
                    <option value="4">Стретчинг</option>
                    <option value="5">Музыка</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="2" class="form-label">Фаил</label>
                <input type="file" name="fileToUpload" class="form-control" id="2">
            </div>
            <button type="submit" class="btn btn-primary">Добавить</button>
        </form>


        <div class="col-7">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Название</th>
                    <th scope="col">Скачать фаил</th>
                    <th scope="col">Удалить фаил</th>
                </tr>
                </thead>
                <tbody>
            <?php

            // Первый перебор массива
            foreach ($rows as $row) {
                echo ' <tr>
      <th scope="row">' . $row['id'] . '</th>
      <td>' . $row['file_name'] . '</td>
      <td><a type="button" class="btn btn-primary" href="../scripts/download.php?file_url=' . urlencode($row['path']) . '">Скачать</a></td>
      <td><form method="post" action="../scripts/delete.php">
    <input type="hidden" name="id" value="'.$row['id'].'">
    <button type="submit" class="btn btn-danger">Удалить</button>
</form></td>
    </tr>';

            }


            ?>
                </tbody>
            </table>
        </div>
    </div>


</div>


<div class="footer">
    <div class="footer_content">
        <div class="footer-ul">
            <ul>
                <li><a href="../index.php">Главная</a></li>
                <li><a href="achive.html">Достижения</a></li>
                <li><a href="files.php">Учебные материалы</a></li>
            </ul>
        </div>

        <a href="https://vk.com/id21505168">
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
