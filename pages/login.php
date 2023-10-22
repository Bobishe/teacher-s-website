


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

    <title>Авторизация</title>
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
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>




<div class="container" style="height: 63vh">
    <div class="row">

        <form action="../scripts/login.php" method="post" style="max-width: 500px; margin-left: auto; margin-right: auto; padding-top: 80px;"  enctype="multipart/form-data">
            <div class="mb-3">
                <label for="1" class="form-label">Логин</label>
                <input type="text" name="login" class="form-control" id="1" >
            </div>
            <div class="mb-3">
                <label for="2" class="form-label">Пароль</label>
                <input type="password" name="pass" class="form-control" id="2">
            </div>
            <button type="submit" class="btn btn-primary">Войти</button>
        </form>
    </div>
</div>





<div class="footer">
    <div class="footer_content">
        <div class="footer-ul">
            <ul>
                <li data-aos="fade-left" data-aos-delay="200"><a href="../index.php">Главная</a> </li>
                <li data-aos="fade-left" data-aos-delay="400"><a href="achive.html">Достижения</a> </li>
                <li data-aos="fade-left" data-aos-delay="800"><a href="files.php">Учебные материалы</a></li>
            </ul>
        </div>

        <a href="https://vk.com/id21505168" data-aos="fade-left" data-aos-delay="1000">
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
