<?php
    header('Content-Type: text/html; charset=utf-8');
    // Проверяем, является ли метод запроса POST и тип содержимого application/json
    if($_SERVER['REQUEST_METHOD'] == 'POST' && $_SERVER["CONTENT_TYPE"] == 'application/json') {
        // Считываем данные запроса из потока ввода с помощью функции file_get_contents() 
        $postData = file_get_contents('php://input');
        // Преобразуем полученные данные из формата JSON в ассоциативный массив PHP с помощью функции json_decode()
        $data = json_decode($postData, true);
        // Преобразуем массив $data обратно в формат JSON с помощью функции json_encode() 
        // и выводим его в качестве ответа на запрос
        echo json_encode($data); 
    }
?>
