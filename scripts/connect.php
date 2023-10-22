<?php
// Настройка параметров подключения
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "moskov_bd";

// Создание подключения
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка подключения
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


