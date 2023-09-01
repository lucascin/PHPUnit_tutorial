<?php

class Calculator {

    protected $result;
    public function add($a, $b) {
        return $a + $b;
    }

    public function subtract($a, $b) {
        return $a - $b;
    }

    public function multiplicate($a, $b) {
        return $a * $b;
    }

    public function divide($a, $b) {
        $this->result;

        if ($b == 0){
            $this->result = "Division by 0 is not allowed";
            return $this->result;
        }
        else{
            return $a / $b;
        }
    }
}

?>