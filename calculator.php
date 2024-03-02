<?php 

class Calculator {

    public $valueA;
    public $valueB;

    public $history=[];


    public function Add($valueA, $valueB){
        $result = $valueA + $valueB;
        $this->gettoHistory("$valueA + $valueB = $result");
    }

    public function Sub($valueA, $valueB){
        $result = $valueA - $valueB;
        $this->gettoHistory("$valueA - $valueB = $result");
    }

    public function Multiply($valueA, $valueB){
        $result = $valueA * $valueB;
        $this->gettoHistory("$valueA * $valueB = $result");
    }

    public function Divide($valueA, $valueB){
        $result = $valueA / $valueB;
        $this->gettoHistory("$valueA / $valueB = $result");
    }

    public function History(){
        return $this->history;
    }
    public function gettoHistory($result){
        $this->history[] = $result;
        print_r($this->history);
    }
}