<?php
session_start();

// Сброс флага авторизации и уничтожение сессии
$_SESSION['authenticated'] = false;
session_destroy();

// Перенаправление на страницу входа или любую другую страницу
header('Location: ../pages/login.php');
exit();