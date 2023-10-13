<?php
	// Создаём подключение к БД world
	header('Content-Type: text/html; charset=utf-8');
	
	// Проверяем наличие соединения с БД: для этого создаём новый объект mysqli 
	$mysqli = new mysqli('127.0.0.1', 'root', '', 'world');
	
	// Проверяем, удалось ли установить соединение 
	if ($mysqli->connect_errno) {

	// Если возникла ошибка, выводим сообщение и прерываем выполнение кода
		echo "Ошибка: Не удалось создать соединение с базой MySQL! Причина: \n"; 
		echo "Ошибка: " . $mysqli->connect_error . "\n";
		exit;
	} else {

	// В противном случае, выводим сообщение об успешном соединении
		echo "Соединение с базой MySQL создано! \n";
}
	// Формируем SQL-запрос для выборки всех данных из таблицы country.
	$sql = "SELECT * FROM `country`";

	// Выполняем SQL-запрос с помощью метода query() объекта $mysqli
	// Результат сохраняем в переменной $result.
	$result = $mysqli->query($sql);

	// Извлекаем данные из результата запроса
	while ($country = $result->fetch_assoc()) {

	// Выводим информацию о каждой стране в формате списка
		echo "<li>";
		echo $country['code'] . ' ' . $country['name'];
		echo "</li>";
	}

	// Освобождаем память, занятую результатом запроса, с помощью метода free()
	$result->free();

	// Закрываем соединение с БД с помощью метода close() объекта $mysqli
	$mysqli->close();
?>
