<?php
    // // echo 48955222532608;
    // echo 4 / 4;
    // // var_dump("hello"); 
    // public function calculate($num1, $operator, $num2) {
    //     echo $num1 + $operator + $num2;
    //   }
    //   calculate(1, *, 2);

    class Calculator {
        public $num1;
        public $operator;
        public $num2;

        public function equation($num1, $operator, $num2) {
            if($operator === "+") {
                echo $num1 + $num2;
            }
            if($operator === "-") {
                echo $num1 - $num2;
            }
            if($operator === "*") {
                echo $num1 * $num2;
            }
            if($operator === "/") {
                echo $num1 / $num2;
            }
        }
    }
    $newCalc = new Calculator;
    $newCalc->equation(4.7, "*", 2);
?>