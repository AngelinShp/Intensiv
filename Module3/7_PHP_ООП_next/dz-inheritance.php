<?php
    class Figure
    {

        protected $color = 'красный';

        public function info() {
            echo 'Фигура окрашена в '.$this->color .' цвет.';
        }

    }

    class Square extends Figure {
        protected $width = 100;
        public function info() {
            echo 'Квадрат имеет длину '.$this->width.'мм . И окрашен в '.$this->color .' цвет.';
        }
        public function __construct($width, $color) {
            $this->width= $width;
            $this->color= $color;
        }
    }

$square = new Square(50, 'синий');
$square->info();


?>