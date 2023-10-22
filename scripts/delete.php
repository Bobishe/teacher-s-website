<?php
require_once '../scripts/connect.php';

// Удаление записи из базы данных
$id = $_POST['id'];
$sql = "DELETE FROM files WHERE id = $id";

if ($conn->query($sql) === true) {
   echo 'Успешно';
    header('Location: ../pages/add.php');
    exit();
} else {
    // Ошибка удаления записи из базы данных
    echo "Ошибка при удалении записи из базы данных: " . $conn->error;
}

// Закрытие соединения с базой данных
$conn->close();