// Часть 1. Детали реализации соединения с БД 

<?php
	// Объявляем пространство имён MyDB
	namespace MyDB;
	// Задаём класс MySQL, который предоставит интерфейс для работы с БД
	class MySQL {
		// Объявляем приватную переменную $db для хранения экземпляра класса (объекта) mysqli и взаимодействия с БД
		private $db; 
		// Задаём конструктор класса, в котором устанавливаем соединение с БД и проверяем его успешность 
		public function __construct($host, $user, $pass, $db) {
			// Создаём новый объект mysqli с переданными параметрами подключения
			$this->db = new \mysqli($host, $user, $pass, $db);
			// Проверяем наличие ошибок при подключении 
			if ($this->db->connect_errno) {
				echo "Ошибка: Не удалось создать соединение с базой MySQL! Причина: \n";
				echo "Ошибка: " . $this->db->connect_error . "\n";
				// Прекращаем выполнение кода в случае ошибки 
				exit;
			}
		}
		// Задаём деструктор класса, который закрывает соединение с БД перед уничтожением объекта
		public function __destruct() {
			// Вызываем метод close() при уничтожении объекта класса, что позволяет корректно закрыть соединение с БД
			$this->close();
		}

// Часть 2. Выполнение запросов и обработка результатов 

		// Используем метод request(), который будет принимать SQL-запрос в качестве параметра
		public function request($sql) {
			// Выполняем SQL-запрос к подключённой БД
			$result = $this->db->query($sql);
			// Проверяем наличие ошибок при выполнении запроса
			if (!$result) {
				echo "Извините, возникла проблема в работе сайта.\n";
				// Прекращаем выполнения кода в случае ошибки 
				exit;
			}
			// Пропишем обработку результатов
			// Если запрос успешно выполнен, но не возвращает результат
			if ($result === true) return;
			// Проверяем наличие результатов запроса
			if ($result->num_rows == 0) {
				echo "Нет результатов.\n";
				// Прекращаем выполнение кода, если результатов нет
				exit;
			}
			$answer = [];
			while ($row = $result->fetch_assoc()) {
				// Добавляем каждую строку результата в массив $answer
				$answer[] = $row; 
			}
			// Освобождаем память, занятую результатом запроса 
			$result->free();
			// Возвращаем массив результатов
			return $answer; 
		}

		public function close() {
			// Закрываем соединение с БД
			$this->db->close();
		}
	}
?>

