<?php
// Подключение к базе данных
require_once 'connect.php';

// Задаем директорию для сохранения файлов
$target_dir = "../assest/files/";

// Создаем путь к загружаемому файлу
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

// Загрузка файла
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {


    // Получение названия файла и категории
    $file_name = $_POST['file_name'];
    $category = $_POST['category'];


    // Сохранение информации о файле в базе данных
    /*$stmt = $conn->prepare("INSERT INTO files (`file_name`, `category`, `path`) VALUES ($file_name, $category, $target_file)");
    /*$stmt->bind_param("sss", $target_file, $file_name, $category);*/

    $sql = mysqli_query($conn, "INSERT INTO `files` (`file_name`, `category`, `path`) VALUES ('$file_name', '$category', '$target_file')");

    if ($sql){
        header('Location: ../pages/add.php');
    }else {
        echo "Ошибка при загрузке файла.";
    }

}

$conn->close();
?>