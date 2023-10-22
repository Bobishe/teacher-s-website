
<?php
session_start();

// Проверка учетных данных
$login = $_POST['login'];
$password = $_POST['pass'];

// Проверка учетных данных на сервере (пример)
if ($login === 'admin' && $password === '19451945') {
    // Установка флага авторизации в сессии
    $_SESSION['authenticated'] = true;

    // Перенаправление на защищенную страницу
    header('Location: ../pages/add.php');
    exit();
} else {
    echo 'Неверные учетные данные.';
}