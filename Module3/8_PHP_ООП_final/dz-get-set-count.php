<?php

    class Counter {
		private $count;

		public function __get($property) {
		    $getter='get'.ucfirst($property); //'getTest'
		    if(method_exists($this, $getter))
		    {
					return $this->$getter();
			} else {
					echo 'Переменная для вывода не найдена';

			}
		}

		public function __set($property, $value) {
            $setter='set'.ucfirst($property); //'setTest'
		    if(method_exists($this, $setter))
		    {
				$this->$setter($value);
			} else {
					echo 'Переменная для вывода не найдена';

			}
		}
		public function getCount() {
			return $this->count;
		}

		public function setCount($value) {
		    if(is_numeric($value)) {
			    $this->count = $value;
			}

		}
	}
	$obj = new Counter();
	$obj->count = 'sdfa'; // неявно вызывается __set
	echo $obj->count;
?>