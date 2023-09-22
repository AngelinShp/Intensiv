<?php
//     echo 'Hello world!' . PHP_EOL;
//     var_dump($_POST);



// Задание 1

var_dump($_GET);
$name = $_GET['name']; // сохраняем значения параметров в переменные
$hobby = $_GET['hobby'];
echo "Привет, $name! У тебя классное хобби: $hobby!"; // выводим приветствие
с именем и хобби

//echo $_SERVER['SERVER_NAME'];
// echo $_SERVER['PHP_SELF'];
// echo $_SERVER['REQUEST_METHOD'];

function parseInput() {
    $input = [];
    parse_str(file_get_contents('php://input'), $input);
    return $input;
}

switch($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        echo var_dump($_GET['test']);
        break;
    case 'POST':
        echo var_dump($_POST['test']);
        break;
    case 'PUT':
        $_PUT = parseInput();
        echo var_dump($_PUT['test']);
        break;
    case 'DELETE':
        $_DELETE = parseInput();
        echo var_dump($_DELETE['test']);
        break;

}


?>