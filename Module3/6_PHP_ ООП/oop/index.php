<?php
	class Car
	{
		public $name = 'Nissan';
		public $color = 'red';

		public function start() {
			echo '1, 2, 3 … Start!';
		}
		public function stop() {
			echo 'Stop!';
		}
	}

    $car1 = new Car();  
    echo $car1->name;
    $car1->start();
    $car1->stop();
?>
