<?php
	// Задание 2
	class Task2
	{
		private $prop1;
		private $prop2;
		
		// магический сеттер:
		public function __set($property, $value)
		{
			//$this->$property = $value;
			if ($property == 'prop1' || $property == 'prop2') {
				$this->$property = $value;
			}
		}
		
		// магический геттер:
		public function __get($property)
		{
			return $this->$property;
		}
	}

	$test = new Task2;
	
	$test->prop1 = 12; // запишем 12
	$test->prop2 = 21; // запишем 21
	
	echo $test->prop1; // выведет 12
	echo $test->prop2; // выведет 21

	$test->prop3 = 31; // попытаемся записать 31
	echo $test->prop3; // ошибка - значение не присвоено и не получено
	?>