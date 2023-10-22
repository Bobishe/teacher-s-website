<?php
// Замените 'path/to/your/file.ext' на ссылку файла из базы данных
$file_url = urldecode($_GET['file_url']);

// Получение информации о файле
$file_info = pathinfo($file_url);

// Заголовки для скачивания файла
header('Content-Type: application/octet-stream');
header("Content-Transfer-Encoding: Binary");
header("Content-disposition: attachment; filename=\"" . $file_info['basename'] . "\"");

// Чтение и вывод содержимого файла
readfile($file_url);