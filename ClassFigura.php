<?php

    class figuraGeometrica {
        
        public function calculateSquarePerimeter($value)
        {
            //create code to calculate the perimeter
        }

        protected function calculateDivisionOfnumbers($num1, $num2)
        {
            $result=$num1/$num2;
            return $result;
        }

        private function calculateAreaCircle() 
        {
            echo "The area is 3.1416";
        }
    }

    class Circulo extends figuraGeometrica {

        public function __construct($pi)
        {
            $this->pi = $pi;
        }

        public function calculateAreaCircle($radio)
        {
            //create the code to calculate the are of the circle 
            //the area is calculated by A = 3.1416 * radio^2
        }

    }


?>